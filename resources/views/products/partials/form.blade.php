@csrf
@if(isset($product))
    @method('PUT')
@endif

<!-- Nama Produk -->
<div class="form-group">
    <label for="name">Product Name<span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control" placeholder="Enter product name" 
        value="{{ old('name', $product->name ?? '') }}" required>
</div>

<!-- Deskripsi Produk -->
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" placeholder="Enter product description">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<!-- Harga Produk -->
<div class="form-group">
    <label for="price">Price<span class="text-danger">*</span></label>
    <input type="number" name="price" class="form-control" placeholder="Enter product price" 
        step="0.01" value="{{ old('price', $product->price ?? '') }}" required>
</div>

<!-- Stok Produk -->
<div class="form-group">
    <label for="stock">Stock<span class="text-danger">*</span></label>
    <input type="number" name="stock" class="form-control" placeholder="Enter product stock" 
        value="{{ old('stock', $product->stock ?? '') }}" required>
</div>

<!-- Tombol Submit dan Kembali -->
<button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Submit' }}</button>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
