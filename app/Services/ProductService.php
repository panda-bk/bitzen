<?php

namespace App\Services;

use \App\Category;
use \App\Product;

class ProductService{
    private $category;
    private $product;
    public function __construct(Category $category, Product $product){
        $this->category = $category;
        $this->product = $product;
    }

    public function store($request)
    {
        $data = $request->all();
        $this->product->create($data);

        return true;

    }

    public function update($request, $id)
    {
        $data = $request->all();
        $product = $this->product->findOrFail($id);
        $product->fill($data);
        $product->save();

        return true;

    }
}