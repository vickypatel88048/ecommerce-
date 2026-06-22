<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
public function __construct()
{
    if (!session('admin')) {
        redirect()->route('admin.login')->send();
        exit;
    }
}
public function edit($id)
{
$product = Product::findOrFail($id);


return view('products.edit', compact('product'));


}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $imageName = $product->image;

    if($request->hasFile('image'))
    {
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(
            public_path('products'),
            $imageName
        );
    }

    $product->update([
        'name' => $request->name,
        'image' => $imageName,
        'price' => $request->price,
        'description' => $request->description,
    ]);

    return redirect()
        ->route('products.index')
        ->with('success','Product Updated Successfully');



}

public function destroy($id)
{
Product::findOrFail($id)->delete();


return redirect()
    ->route('products.index')
    ->with('success','Product Deleted Successfully');


}

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
         $imageName = time().'.'.$request->image->extension();

    $request->image->move(
        public_path('products'),
        $imageName
    );

    Product::create([
        'name' => $request->name,
        'image' => $imageName,
        'price' => $request->price,
        'description' => $request->description,
    ]);

    

        return redirect()
            ->route('products.index')
            ->with('success', 'Product Added Successfully');
    }
}