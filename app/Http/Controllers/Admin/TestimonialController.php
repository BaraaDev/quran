<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::orderBy('created_at','DESC')->paginate('25');
        return view('admin.testimonial.index',compact('testimonials'));
    }


    public function create()
    {
        return view('admin.testimonial.create');
    }


    public function store(Request $request)
    {
        $testimonials = Testimonial::create($request->all());
        $testimonials
            ->addMediaFromRequest('image')
            ->UsingName($testimonials->name)
            ->UsingFileName("$testimonials->name.jpg")
            ->withCustomProperties([

                'subject'  => $testimonials->name,
            ])
            ->toMediaCollection('images');
        return redirect()->route('testimonials.index')->with(['message' => "تم الإنشاء بنجاح"]);
    }


    public function show($id)
    {
        abort('404');
    }


    public function edit($id)
    {
        $model = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $testimonials = Testimonial::findOrFail($id);
        $testimonials->update($request->all());
        if ($request->hasFile('image')) {

            $testimonials
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($testimonials->name)
                ->UsingFileName("$testimonials->name.jpg")
                ->withCustomProperties([

                    'subject'  => $testimonials->name,
                ])
                ->toMediaCollection('images');

        }
        return redirect()->route('testimonials.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        $testimonials = Testimonial::findOrFail($id);
        $testimonials->delete();

        return redirect()->route('testimonials.index')
            ->with(['message' => "تم الحذف بنجاح"]);
    }
}
