<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::orderBy('is_admin','ASC')->paginate('25');

        return view('admin.user.index',compact('users'));
    }


    public function create()
    {
        return view('admin.user.create');
    }


    public function store(UserRequest $request)
    {
        $request->merge(['password' => bcrypt($request->password)]);
        $users = User::create($request->all());

        return redirect()->route('users.index')->with(['message' => "تم إنشاء المستخدم بنجاح"]);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('admin.user.edit',compact('model'));
    }


    public function update(UserRequest $request, $id)
    {
        $request->merge(['password' => bcrypt($request->password)]);
        $users = User::findOrFail($id);
        $users->update($request->all());

        return redirect()->route('users.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('users.index')
            ->with(['message' => "تم حذف المستخدم بنجاح"]);
    }
}
