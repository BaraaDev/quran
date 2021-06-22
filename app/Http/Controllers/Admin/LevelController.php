<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
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
        $levels = Level::orderBy('created_at','DESC')->paginate('25');

        return view('admin.level.index',compact('levels'));
    }


    public function create()
    {
        return view('admin.level.create');
    }


    public function store(LevelRequest $request)
    {
        $levels = Level::create($request->all());

        return redirect()->route('levels.index')->with(['message' => "تم إنشاء المستوي بنجاح"]);
    }

    public function show()
    {
        abort('404');
    }


    public function edit($id)
    {
        $model = Level::findOrFail($id);
        return view('admin.level.edit',compact('model'));
    }


    public function update(LevelRequest $request, $id)
    {
        $levels = Level::findOrFail($id);
        $levels->update($request->all());

        return redirect()->route('levels.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }

    public function destroy($id)
    {
        $levels = Level::findOrFail($id);
        $levels->delete();

        return redirect()->route('levels.index')
            ->with(['message' => "تم حذف المستوي بنجاح"]);
    }
}
