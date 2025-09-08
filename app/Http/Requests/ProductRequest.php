<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $productId = null;
        $routeProduct = $this->route('product');
        if ($routeProduct) {
            $productId = is_object($routeProduct) ? $routeProduct->id : $routeProduct;
        }

        return [
            'name' => 'required|string|max:255|unique:products,name,' . $productId,
            'slug' => 'nullable|string|max:255|unique:products,slug,' . $productId,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'nullable|integer|min:0',
            'image' => 'nullable|image|max:2048', // 2MB
        ];
    }
}
