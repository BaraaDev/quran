<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::orderBy('created_at','DESC')->paginate('25');

        return view('admin.service.index',compact('services'));
    }


    public function create()
    {
        return view('admin.service.create');
    }


    public function store(ServiceRequest $request)
    {
        $services = Service::create($request->all());
        $services
            ->addMediaFromRequest('image')
            ->UsingName($services->title)
            ->UsingFileName("$services->title.jpg")
            ->withCustomProperties([

                'subject'  => $services->title,
            ])
            ->toMediaCollection('images');
        return redirect()->route('services.index')->with(['message' => "تم إنشاء الخدمة بنجاح"]);
    }


    public function show($id)
    {
        abort('404');
    }


    public function edit($id)
    {
        $model = Service::findOrFail($id);
        return view('admin.service.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $services = Service::findOrFail($id);
        $services->update($request->all());
        if ($request->hasFile('image')) {

            $services
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($services->title)
                ->UsingFileName("$services->title.jpg")
                ->withCustomProperties([

                    'subject'  => $services->title,
                ])
                ->toMediaCollection('images');

        }
        return redirect()->route('services.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();

        return redirect()->route('services.index')
            ->with(['message' => "تم حذف الخدمة بنجاح"]);
    }
}
