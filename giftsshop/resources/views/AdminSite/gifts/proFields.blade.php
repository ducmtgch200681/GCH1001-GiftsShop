<input type="hidden" name="Gifts_id" value="{{old('Gifts_id')?? $product->Gifts_id}}">
<div class="form-group">
    <label for="Gifts_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Gifts_Name" name="Gifts_Name" value="{{old('Gifts_Name')?? $product->Gifts_Name}}">
</div>

@php
    $Cate_id = old('category') ?? $product->Cate_id?? null;
@endphp

<div class="form-group">
    <label for="Cate_id" class="font-weight-bold">Category</label>
    <select name="Cate_id" class="form-control" id="Cate_id" required>
        <option value="0">Please select a category</option>
        @foreach($category as $c)
            <option value="{{ $c->Cate_id }}"
                {{ ($Cate_id != null && $c->Cate_id == $Cate_id) ? 'selected' : '' }}
            >{{ $c->Cate_Name }}</option>
        @endforeach
    </select>
</div>


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
    <label for="Gifts_Images" class="font-weight-bold">Image</label>
    <br>
    <img id="img" class="img-fluid" alt="" style="max-width: 200px; max-height: 150px" src="{{asset('storage/images/'.$product->Gifts_Images )}}" >
    <br>
    <!-- Add id file for tracking new image uploaded -->
    <input type="file" id="file" name="Gifts_Images"  value="{{old('Gifts_Images')?? $product->Gifts_Images}}">
</div>



