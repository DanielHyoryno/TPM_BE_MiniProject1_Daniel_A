<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showSort()
    {
    $products = Product::orderBy('name', 'asc')->get();
    return response()->json($products);}


    public function index(Request $request)
    {
        $sortBy = $request->get('sortBy', 'name');
        $sortOrder = $request->get('sortOrder', 'asc');

        $validSortColumns = ['name', 'description', 'price', 'stock', 'category_id'];
        $validSortOrders = ['asc', 'desc'];

        if (!in_array($sortBy, $validSortColumns)) {
            $sortBy = 'name'; 
        }

        if (!in_array($sortOrder, $validSortOrders)) {
            $sortOrder = 'asc';
        }

        $products = Product::with('category')
            ->orderBy($sortBy, $sortOrder)
            ->get();

        return view('index', compact('products', 'sortBy', 'sortOrder')); 
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $product = Product::create($request->all());
        return redirect()->route(route: 'products.index')->with('success', 'Product updated successfully.');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route(route: 'products.index')->with('success', 'Product updated successfully.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories')); 
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }


}
