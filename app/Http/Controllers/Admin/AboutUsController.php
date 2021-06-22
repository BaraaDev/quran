<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutUpdateRequest;
use App\Http\Requests\About\AboutRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
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

    public function create()
    {
        $about = AboutUs::all();

        if (count($about) == 0)
        {
            return view('admin.about.create');

        } else {
            abort('404');
        }

    }

    public function store(AboutRequest $request)
    {
        $about_us = AboutUs::create($request->all());
        $about_us
            ->addMediaFromRequest('image')
            ->UsingName($about_us->title)
            ->UsingFileName("$about_us->title.jpg")
            ->withCustomProperties([
                'subject'  => $about_us->title,
            ])
            ->toMediaCollection('images');
        return redirect()->route('about_us.edit',$about_us->id);
    }

    public function edit($id)
    {
        $about = AboutUs::all();
            $model = AboutUs::findOrFail($id);
            if ($model)
            {
                return view('admin.about.edit',compact('model'));
            } else {
                abort('404');
            }
    }

    public function update(AboutUpdateRequest $request,$id)
    {
        $about_us = AboutUs::findOrFail($id);

        $about_us->update($request->all());
        if ($request->hasFile('image')) {

            $about_us
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($about_us->title)
                ->UsingFileName("$about_us->title.jpg")
                ->withCustomProperties([
                    'subject'  => $about_us->title,
                ])
                ->toMediaCollection('images');

        }

        return redirect()->back()
            ->with(['message' => "تم التعديل بنجاح"]);
    }
}
