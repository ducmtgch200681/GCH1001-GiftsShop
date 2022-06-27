<dl class="row">


    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $category->Cate_Name }}</dd>

    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9">{{ $category->Cate_Description }}</dd>

    <dt class="col-sm-3">Image</dt>

    <!-- Change to correct path that store the images uploaded -->
    <img width = 500rem; src="{{asset('storage/Images/'.$category->Cate_image )}}" />

</dl>
