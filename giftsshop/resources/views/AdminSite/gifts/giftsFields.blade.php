<input type="hidden" name="Gifts_id" value="{{old('Gifts_id')?? $category->Cate_id}}">

<div class="form-group">
    <label for="Gifts_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Gifts_Name" name="Gifts_Name" value="{{old('Gifts_Name')?? $category->Cate_Name}}">
</div>

<div class="form-group">
    <label for="Cate_Description" class="font-weight-bold">Description</label>
    <input type="text" class="form-control" id="Cate_Description" name="Cate_Description" value="{{old('Cate_Description')?? $category->Cate_Description}}">
</div>
