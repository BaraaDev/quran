<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        $categories = Category::orderBy('created_at','ASC')->paginate('25');
        return view('admin.category.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(CategoryRequest $request)
    {
        $categories = Category::create($request->all());

        return redirect()->route('categories.index')->with(['message' => "تم إنشاء القسم بنجاح"]);
    }


    public function show($id)
    {
        abort('404');
    }


    public function edit($id)
    {
        $model = Category::findOrFail($id);
        return view('admin.category.edit',compact('model'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->update($request->all());

        return redirect()->route('categories.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return redirect()->route('categories.index')
            ->with(['message' => "تم حذف القسم بنجاح"]);
    }
}
