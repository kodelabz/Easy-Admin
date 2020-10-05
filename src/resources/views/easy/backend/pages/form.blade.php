@extends('easyview::backend.layout')
@section('title','Dashboard')
@section('container')

    <div class="col-md-9">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>

            <form role="form"  method="post" id="quickForm">

                @if($metaData->view->entity() !== null)
                    <input type="hidden" name="id" value="{{$metaData->view->entity()->id}}">
                @endif
                <div class="card-body">
                 @foreach($metaData->view->getFields() as $f)
                     @if($f->getField() == "id")
                        @continue
                     @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ucfirst(str_replace('_',' ',$f->getField()))}}</label>
                            <input type="{{$f->getType()}}" class="form-control" id="exampleInputEmail1"
                                   name="{{$f->getField()}}"
                                   @if($metaData->view->entity() !== null)
                                       value="{{ $metaData->view->entity()->{$f->getField()} }}"
                                       data-field="{{$f->getField()}}"
                                   @endif
                                   placeholder="Enter {{$f->getField()}}">
                        </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>


@endsection

@push('script')
    <script>
        Validator.rules(
            {
                @foreach($metaData->view->getFields() as $f)
                    @if(!$f->getIsNullable() && $f->getField() !== "id")
                        {{$f->getField()}}: {
                            required: true
                        },
                    @endif
                @endforeach
            }
        )
            .handler(function (data){
                Request
                    .handler(
                        function (response){
                            Alert.success(response.message)
                            if (typeof response.redirect !== "undefined"){
                                setTimeout(function (){
                                    window.location.replace(response.redirect)
                                },1000)
                            }
                        },
                        function (errorResponse){
                            Alert.error("{{__('დაფიქსირდა შეცდომა')}}")
                        })
                    .to("{{route($metaData->view->getRoutePrefix('.store'))}}")
                    .post( $(data).serialize())
            })
            .validate("#quickForm");
    </script>
@endpush
