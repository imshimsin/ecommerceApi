<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::where('user_id', auth()->id())->get();
            return response()->json($products, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to retrieve products'], 500);
        }
    }

    public function show(Product $product)
    {
        try {

            if ($product->user_id !== auth()->id()) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            return response()->json($product, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function store(Request $request)
    {
                $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        try {
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('products', 'public');
                $validated['image'] = $path;
            }

            $product = Product::create([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'price' => $validated['price'],
                'stock' => $validated['stock'],
                'image' => $validated['image'] ?? null,
                'user_id' => auth()->id(),
            ]);

            return response()->json($product, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, Product $product)
    {

        if ($product->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|numeric',
            'stock' => 'sometimes|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        try {
            if ($request->hasFile('image')) {
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                }
                $path = $request->file('image')->store('products', 'public');
                $validated['image'] = $path;
            }

            // Update the product
            $product->update($validated);
            return response()->json($product, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update product'], 500);
        }
    }

    public function destroy(Product $product)
    {
        if ($product->user_id !== auth()->id()) {
            return response()->json(['message' => 'You are not authorized to delete this product'], 403);
        }

        try {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $product->delete();
            return response()->json(['message' => 'Product deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete the product'], 500);
        }
    }
}
