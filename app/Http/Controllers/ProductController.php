<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return Inertia::render('Admin/Product/Index', [
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        // Check if product has images

        if ($product->hasFile('product_images')) {
            $productImages = $request->file('product_images');
            foreach ($productImages as $key => $image) {
                # generate unique name
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move('product_images', $uniqueName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success' ,'Product created successfully. ');
    }
}
