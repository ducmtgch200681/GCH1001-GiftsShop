<dl class="row">


    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $category->Cate_Name }}</dd>

    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9">{{ $category->Cate_Description }}</dd>

    <dt class="col-sm-3">Image</dt>
{{--    <dd class="col-sm-9">{{$category->Cate_image }}</dd>--}}
        <img width = 500rem; src="{{asset('images/'.$category->Cate_image )}}" />

</dl>
