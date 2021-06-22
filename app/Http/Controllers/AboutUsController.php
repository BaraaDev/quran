<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Service;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        $services = Service::limit(4)->get();
        $testimonials = Testimonial::limit(3)->get();

        SEOMeta::setTitle($about->title);
        SEOMeta::setDescription($about->description);
        SEOMeta::setCanonical('https://quran.test/about-us');

        OpenGraph::setTitle($about->title);
        OpenGraph::setDescription($about->title);
        OpenGraph::setUrl(env('https://quran.test/about-us'));
        OpenGraph::addProperty('type', $about->title);

        TwitterCard::setTitle($about->title);
        TwitterCard::setSite(route('article.index'));

        JsonLd::setTitle($about->title);
        return view('about-us' ,compact('about','services','testimonials'));
    }
}
