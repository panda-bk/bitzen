<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Category;
use \App\User;
use \App\Services\ProductService;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    private $product;
    private $category;
    private $productService;
    public function __construct(Product $product, Category $category, ProductService $productService){
        $this->product = $product;
        $this->category = $category;
        $this->productService = $productService;

    }

    public function index()
    {
        $products = $this->product->with('category')->get();

        return view('product.index', compact('products'));
        
    }

    public function create()
    {
        $categories = $this->category->all();
        
        return view('product.create', compact('categories'));

    }
    
    public function store(ProductRequest $request)
    {

        $this->productService->store($request);

        return redirect('/product');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = $this->product->findOrFail($id);
        $categories = $this->category->all();

        return view('product.edit', compact('product','categories'));

    }

    public function update(ProductRequest $request, $id)
    {
        $this->productService->update($request, $id);

        return redirect('/product');
        
    }
    
    public function destroy($id)
    {
        $product = $this->product->find($id);
		try {
			$product->delete();
			return redirect('/product')->with('success', 'Removido com sucesso!');
		} catch (\Exception $e) {
			return redirect('/product')->with('error', 'Ops! Ocorreu um erro ao remover esse produto');
        }
    }

    public function getTotal()
    {
        $getProductTotal = $this->product->count();
        $getCategoryTotal = $this->category->count();
        $getUserTotal = User::count();
        return response()->json([
            'product' => $getProductTotal,
            'category' => $getCategoryTotal,
            'user' => $getUserTotal
        ]);
    }
}
