<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\EmailSender;
use App\Models\ContactUs;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function create()
    {
        SEOMeta::setTitle('تواصل معنا');
        SEOMeta::setDescription('تواصل معنا');
        SEOMeta::setCanonical('https://quran.test/content-us');

        OpenGraph::setTitle('تواصل معنا');
        OpenGraph::setDescription('تواصل معنا');
        OpenGraph::setUrl(env('https://quran.test/content-us'));
        OpenGraph::addProperty('type', 'تواصل معنا');

        TwitterCard::setTitle('تواصل معنا');
        TwitterCard::setSite(route('article.index'));

        JsonLd::setTitle('تواصل معنا');
        return view('contact-us');
    }

    public function store(ContactRequest $request)
    {
        $contact_us = ContactUs::create($request->all());

        return redirect()->back();
    }
}
