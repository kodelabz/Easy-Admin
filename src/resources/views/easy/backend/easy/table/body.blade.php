@php($listData = $list->list())
@foreach($listData as $l)
    <tr>
        @foreach($list->headers()  as $k => $v)
           <td>
               {!! $l->{$v} !!}
           </td>
        @endforeach
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-default">Action</button>
                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="{{route($list->getRoutePrefix('.edit'),$l->id)}}">Edit</a>
                        <a class="dropdown-item" href="{{route($list->getRoutePrefix('.destroy'),$l->id)}}">Delete</a>
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        todo extra menu links here--}}
{{--                        <a class="dropdown-item" href="#">Separated link</a>--}}
                    </div>
                </button>
            </div>
        </td>
    </tr>
@endforeach
