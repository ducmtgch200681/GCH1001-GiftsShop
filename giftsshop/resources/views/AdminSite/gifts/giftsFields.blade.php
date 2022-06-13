<input type="hidden" name="Gifts_id" value="{{old('Gifts_id')?? $gifts->Gifts_id}}">

<div class="form-group">
    <label for="Gifts_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Gifts_Name" name="Gifts_Name" value="{{old('Gifts_Name')?? $gifts->Gifts_Name}}">
</div>

<div class="form-group">
    <label for="Cate_id" class="font-weight-bold">Type</label>
    <input type="number" class="form-control" id="Cate_id" name="Cate_id" value="{{old('Cate_id')?? $category->Cate_id}}">
</div>

<div class="form-group">
    <label for="Gifts_Price" class="font-weight-bold">Price</label>
    <input type="text" class="form-control" id="Gifts_Price" name="Gifts_Price" value="{{old('Gifts_Price')?? $gifts->Gifts_Price}}">
</div>

<div class="form-group">
    <label for="Gifts_Brand" class="font-weight-bold">Brand</label>
    <input type="text" class="form-control" id="Gifts_Brand" name="Gifts_Brand" value="{{old('Gifts_Brand')?? $gifts->Gifts_Brand}}">
</div>
