<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
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
        $appointments = Appointment::orderBy('created_at','ASC')->paginate('25');
        return view('admin.appointment.index',compact('appointments'));
    }


    public function create()
    {
        return view('admin.appointment.create');
    }


    public function store(AppointmentRequest $request)
    {
        $appointments = Appointment::create($request->all());
        if ($request->hasFile('image')) {
            $appointments
                ->addMediaFromRequest('image')
                ->UsingName($appointments->title)
                ->UsingFileName("$appointments->title.jpg")

                ->withCustomProperties([
                    'subject'  => $appointments->title,
                ])
                ->toMediaCollection('images');
        }
        return redirect()->route('appointments.index')->with(['message' => "تم إنشاء موعد بنجاح"]);
    }


    public function show($id)
    {
        abort('404');
    }


    public function edit($id)
    {
        $model = Appointment::findOrFail($id);
        return view('admin.appointment.edit',compact('model'));
    }


    public function update(AppointmentRequest $request, $id)
    {
        $appointments = Appointment::findOrFail($id);
        $appointments->update($request->all());
        if ($request->hasFile('image')) {

            $appointments
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($appointments->title)
                ->UsingFileName("$appointments->title.jpg")
                ->withCustomProperties([
                    'subject'  => $appointments->title,
                ])
                ->toMediaCollection('images');
        }
        return redirect()->route('appointments.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        $appointments = Appointment::findOrFail($id);
        $appointments->delete();

        return redirect()->route('appointments.index')
            ->with(['message' => "تم حذف الموعد بنجاح"]);
    }
}
