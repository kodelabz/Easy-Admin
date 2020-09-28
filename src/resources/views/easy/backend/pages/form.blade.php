@extends('easyview::backend.layout')
@section('title','Dashboard')
@section('container')
    @php($user = \Illuminate\Support\Facades\Auth::user())
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <form role="form"  method="post" id="quickForm">
                <div class="card-body">
                 @foreach($form->getFields() as $f)
                     @if($f->getField() == "id")
                        @continue
                     @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ucfirst($f->getField())}}</label>
                            <input type="{{$f->getType()}}" class="form-control" id="exampleInputEmail1"
                                   name="{{$f->getField()}}"
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
                @foreach($form->getFields() as $f)
                    @if(!$f->getIsNullable() && $f->getField() !== "id")
                        {{$f->getField()}}: {
                            required: true
                        },
                    @endif
                @endforeach
            }
        )
            .handler(function (data){
                var rsq = Request
                    .handler(
                        function (response){
                            Alert.success(response.message)
                        },
                        function (errorResponse){
                            Alert.error("{{__('დაფიქსირდა შეცდომა')}}")
                        })
                    .to("{{route($form->getRoutePrefix('.store'))}}")
                    .post( $(data).serialize())
            })
            .validate("#quickForm");
    </script>
@endpush
