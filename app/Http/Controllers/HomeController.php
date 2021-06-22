<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Article;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $appointments = Appointment::limit(2)->get();
        $articles = Article::limit(3)->get();
        $testimonials = Testimonial::limit(3)->get();
        $services = Service::limit(4)->get();
        $setting = Setting::first();

        SEOMeta::setTitle($setting->title);
        SEOMeta::setDescription($setting->meta_description);
        SEOMeta::setCanonical(env('APP_URL'));
        SEOMeta::addKeyword([$setting->meta_keyword]);

        OpenGraph::setTitle($setting->title);
        OpenGraph::setDescription($setting->meta_description);
        OpenGraph::setUrl(env('APP_URL'));
        OpenGraph::addProperty('type', $setting->title);

        TwitterCard::setTitle($setting->title);
        TwitterCard::setSite(env('APP_URL'));

        JsonLd::setTitle($setting->title);
        return view('home',compact('appointments',
              'articles','testimonials','services'));
    }
}
