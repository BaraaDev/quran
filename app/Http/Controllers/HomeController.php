<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Article;
use App\Models\Event;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $appointments = Appointment::limit(2)->get();

        $articles     = Article::status()->limit(3)->get();
        $testimonials = Testimonial::status()->limit(3)->get();
        $services     = Service::status()->limit(4)->get();
        $events       = Event::status()->limit(2)->get();
        $setting      = Setting::first();
        $time         = Carbon::now()->format('H');

        SEOMeta::setTitle($setting->title);
        SEOMeta::setDescription($setting->meta_description);
        SEOMeta::setCanonical(env('APP_URL'));
        SEOMeta::addKeyword($setting->meta_keyword);

        OpenGraph::setTitle($setting->title);
        OpenGraph::setDescription($setting->meta_description);
        OpenGraph::setUrl(env('APP_URL'));
        OpenGraph::addProperty('type', $setting->title);

        TwitterCard::setTitle($setting->title);
        TwitterCard::setSite(env('APP_URL'));

        JsonLd::setTitle($setting->title);



        return view('home',compact('appointments',
              'articles','testimonials','services','events','time'));
    }


}
