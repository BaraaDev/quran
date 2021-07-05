<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
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
        $setting = Setting::all();

        if (count($setting) == 0)
        {
            return view('admin.setting.create');

        } else {
            abort('404');
        }

    }

    public function store(SettingRequest $request)
    {
        $setting = Setting::create($request->all());
        $setting
            ->addMediaFromRequest('image')
            ->UsingName($setting->title)
            ->UsingFileName("$setting->title.jpg")
            ->withCustomProperties([
                'subject'  => $setting->title,
            ])
            ->toMediaCollection('images');
        return redirect()->route('settings.edit',$setting->id);
    }

    public function edit($id)
    {

        $model = Setting::findOrFail($id);
        if ($model)
        {
            return view('admin.setting.edit',compact('model'));
        } else {
            abort('404');
        }
    }

    public function update(SettingRequest $request,$id)
    {
        $setting = Setting::findOrFail($id);

        $setting->update($request->all());
        if ($request->hasFile('image')) {
            $setting
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($setting->title)
                ->UsingFileName("$setting->title.jpg")
                ->withCustomProperties([
                    'subject'  => $setting->title,
                ])
            ->toMediaCollection('images');
        }

        return redirect()->back()
            ->with(['message' => "تم التعديل بنجاح"]);
    }
}
