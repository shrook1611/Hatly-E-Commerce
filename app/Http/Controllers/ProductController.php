<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate();
        $categories = Category::all();
        return view('admin.product.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id'

        ]);
        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('products', 'public');
        }
        Product::create($validate);
        return redirect()->route('product')->with('success', 'Category created successfully');
    }
    public function edit($id)
    {

        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

   public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);
    
    $request->validate([
        'name' => 'required|unique:products,name,' . $id, // Fixed: should be products table, ignore current record
        'description' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'category_id' => 'required|exists:categories,id'
    ]);
    
    $data = $request->only(['name', 'description', 'price', 'quantity', 'category_id']);
    
    if ($request->hasFile('image')) {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $data['image'] = $request->file('image')->store('products', 'public');
    }
    
    $product->update($data); // Fixed: should update, not create
    
    return redirect()->route('product')->with('success', 'Product updated successfully');
}



    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product')->with('success', 'Product deleted successfully');
    }
}
