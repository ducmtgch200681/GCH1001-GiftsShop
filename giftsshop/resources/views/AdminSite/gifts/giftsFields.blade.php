<div class="form-group">
    <label for="Price" class="font-weight-bold">Price</label>
    <input type="text" class="form-control" id="Price" name="Price" value="{{old('Price')?? $product->Price}}">
</div>

<div class="form-group">
    <label for="Brand" class="font-weight-bold">Brand</label>
    <input type="text" class="form-control" id="Brand" name="Brand" value="{{old('Brand')?? $product->Brand}}">
</div>

<div class="form-group">
    <label for="Gifts_Description" class="font-weight-bold">Description</label>
    <input type="text" class="form-control" id="Gifts_Description" name="Gifts_Description" value="{{old('Gifts_Description')?? $product->Gifts_Description}}">
</div>

<div class="form-group">
    <label for="img" class="font-weight-bold">Image</label><br>
    <img id="img" class="img-fluid" alt="" width="230" height="120" src="{{asset('storage/Images/'.$product->Gifts_Images )}}" alt="">
    <input type="file" id="file" name="Gifts_Images"  value="{{old('img')?? $product->Gifts_Images}}">
</div>


