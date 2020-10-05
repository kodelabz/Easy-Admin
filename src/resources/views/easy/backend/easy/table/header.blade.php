<th>
    <input type="checkbox" id="checkboxPrimaryGenesis"  value="0">
</th>

@foreach($listHeaders as $header)
    <th>{{ucwords($header)}}</th>
@endforeach

<th>Action</th>
