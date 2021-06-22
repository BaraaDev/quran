<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
        $events = Event::orderBy('created_at','ASC')->paginate('25');
        return view('admin.event.index',compact('events'));
    }


    public function create()
    {
        return view('admin.event.create');
    }


    public function store(Request $request)
    {
        $events = Event::create($request->all());
        $events
            ->addMediaFromRequest('image')
            ->UsingName($events->title)
            ->UsingFileName("$events->title.jpg")
            ->withCustomProperties([

                'subject'  => $events->title,
            ])
            ->toMediaCollection('images');
        return redirect()->route('events.index')->with(['message' => "تم الإنشاء بنجاح"]);
    }


    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.show',compact('event'));
    }


    public function edit($id)
    {
        $model = Event::findOrFail($id);
        return view('admin.event.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $events = Event::findOrFail($id);
        $events->update($request->all());
        if ($request->hasFile('image')) {

            $events
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($events->title)
                ->UsingFileName("$events->title.jpg")
                ->withCustomProperties([

                    'subject'  => $events->title,
                ])
                ->toMediaCollection('images');

        }
        return redirect()->route('events.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();

        return redirect()->route('events.index')
            ->with(['message' => "تم الحذف بنجاح"]);
    }
}
