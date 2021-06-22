<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $tags = Tag::orderBy('created_at','DESC')->paginate('25');
        return view('admin.tag.index',compact('tags'));
    }



    public function create()
    {
        return view('admin.tag.create');
    }


    public function store(TagRequest $request)
    {
        $tags = Tag::create($request->all());

        return redirect()->route('tags.index')->with(['message','تم إنشاء المقال بنجاح']);
    }


    public function show($id)
    {
        abort('404');
    }


    public function edit($id)
    {
        $model = Tag::findOrFail($id);
        return view('admin.tag.edit',compact('model'));
    }


    public function update(TagRequest $request, $id)
    {
        $tags = Tag::findOrFail($id);
        $tags->update($request->all());

        return redirect()->route('tags.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();

        return redirect()->route('tags.index')->with(['message' => "تم الحذف بنجاح"]);
    }
}
