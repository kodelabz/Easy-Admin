
@isset($field)
<div class="form-group">
    <label for="exampleInputEmail1">
        {{ucfirst(str_replace('_',' ',$field->getField()))}}
    </label>

    <input type="{{$field->getType()}}"
           class="form-control"
           id="exampleInputEmail1"
           name="{{$field->getField()}}"
           placeholder="Enter {{$field->getField()}}"
    >
</div>
@endif
