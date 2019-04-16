<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\Services\CategoryService;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    private $category;
    private $categoryService;
    public function __construct(Category $category, CategoryService $categoryService)
    {
        $this->category = $category;
        $this->categoryService = $categoryService;

    }
    
    public function index()
    {
        $categories = $this->category->all();
        return view('category.index', compact('categories'));

    }


    public function create()
    {
        return view('category.create');

    }

    public function store(CategoryRequest $request)
    {
        $this->categoryService->store($request);
        
        return redirect('/category');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = $this->category->FindOrfail($id);
        return view('category.edit', compact('category','category'));

    }

    public function update(CategoryRequest $request, $id)
    {
        $this->categoryService->update($request, $id);

        return redirect('/category');
        
    }

    public function destroy($id)
    {
        $category = $this->category->find($id);
		try {
			$category->delete();
			return redirect('/category')->with('success', 'Removido com sucesso!');
		} catch (\Exception $e) {
			return redirect('/category')->with('error', 'Ops! Ocorreu um erro ao remover esse categoria');
        }
    }
}
