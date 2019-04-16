<?php

namespace App\Services;

use \App\Category;

class CategoryService{
    private $category;
    public function __construct(Category $category){
        $this->category = $category;    
    }

    public function store($request)
    {
        $data = $request->all();
        $this->category->create($data);

        return true;
    }

    public function update($request, $id)
    {

        $data = $request->all();
        $category = $this->category->findOrFail($id);
        $category->fill($data);
        $category->save();

        return true;
    }

}
