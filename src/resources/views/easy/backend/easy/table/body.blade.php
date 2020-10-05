@foreach($listData as $l)
    <tr>
        <td>
            <input type="checkbox" id="checkboxPrimary{{$l->id}}" name="id[]" value="{{$l->id}}">
        </td>
        @foreach($listHeaders  as $k => $v)
           <td>
               {!! $l->{$v} !!}
           </td>
        @endforeach
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-default">{{__('Action')}}</button>
                <a  class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                </a>

                <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item nav-link "
                           href="{{route($metaData->view->getRoutePrefix('.edit'),$l->id)}}">
                            Edit
                        </a>

                        <a class="dropdown-item deleteAction" href="{{route($metaData->view->getRoutePrefix('.destroy'),$l->id)}}">
                            Delete
                        </a>
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        todo extra menu links here --}}
{{--                        <a class="dropdown-item" href="#">Separated link</a>--}}
                    </div>
            </div>
        </td>
    </tr>
@endforeach


@push('script')
<script>
    $(document).ready(function (){

        var checkAll = $('input.all');
        var checkboxes = $('input.check');

        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square',
        });


        // checkAll.on('ifChecked ifUnchecked', function(event) {
        //     if (event.type == 'ifChecked') {
        //         console.log(1)
        //         checkboxes.iCheck('check');
        //     } else {
        //         checkboxes.iCheck('uncheck');
        //     }
        // });
        //
        // checkboxes.on('ifChanged', function(event){
        //     console.log(2)
        //
        //     if(checkboxes.filter(':checked').length == checkboxes.length) {
        //         checkAll.prop('checked', 'checked');
        //     } else {
        //         checkAll.removeProp('checked');
        //     }
        //     checkAll.iCheck('update');
        // });
    })
</script>

@endpush
