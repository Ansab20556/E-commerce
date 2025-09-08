@csrf

<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name="name" value="{{ old('name', $product->name ?? '') }}" type="text" class="form-control" id="name">
    @error('name') <div class="text-danger mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="slug" class="form-label">Slug (optional)</label>
    <input name="slug" value="{{ old('slug', $product->slug ?? '') }}" type="text" class="form-control" id="slug">
    @error('slug') <div class="text-danger mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input name="price" value="{{ old('price', $product->price ?? '') }}" type="number" step="0.01" class="form-control" id="price">
    @error('price') <div class="text-danger mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input name="stock" value="{{ old('stock', $product->stock ?? '') }}" type="number" class="form-control" id="stock">
    @error('stock') <div class="text-danger mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="description" rows="4">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description') <div class="text-danger mt-1">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input name="image" type="file" class="form-control" id="image">
    @if(!empty($product->image))
        <div class="mt-2">
            <img src="{{ asset('storage/' . $product->image) }}" alt="image" style="max-width:120px;">
        </div>
    @endif
    @error('image') <div class="text-danger mt-1">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-primary">Save</button>
