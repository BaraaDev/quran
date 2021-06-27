<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\EmailSender;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
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

    public function index(Request $request)
    {
        $contacts = ContactUs::orderBy('created_at','DESC')->where('is_sender',0)->where(function ($q) use($request){
            if($request->keyword)
            {

                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('subject' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('message' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('created_at' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('updated_at' , 'LIKE' , '%'.$request->keyword.'%');
            }
        })->paginate('25');
        return view('admin.mail.index',compact('contacts','request'));
    }


    public function create()
    {
        return view('admin.mail.create');
    }


    public function store(ContactRequest $request)
    {
        $mail = ContactUs::create($request->all());

        Mail::to($mail->email)
                    ->send(new EmailSender($mail));
        return redirect()->back();
    }


    public function show($id)
    {
        $contact_us = ContactUs::findOrFail($id);
        if($contact_us->is_read == 0) {
            $contact_us->update(['is_read' => 1]);
        }
        return view('admin.mail.show',compact('contact_us'));
    }


    public function edit($id)
    {
        abort('404');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        return redirect()->route('mail.index')
            ->with(['message' => "تم الحذف بنجاح"]);
    }


    public function sender(Request $request)
    {
        $contacts = ContactUs::orderBy('created_at','DESC')->where('is_sender',1)->where(function ($q) use($request){
            if($request->keyword)
            {

                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('subject' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('message' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('created_at' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('updated_at' , 'LIKE' , '%'.$request->keyword.'%');
            }
        })->paginate('25');
        return view('admin.mail.sender',compact('contacts','request'));
    }

    public function delete(Request $request)
    {
        $contacts = ContactUs::onlyTrashed()->orderBy('created_at','DESC')->where(function ($q) use($request){
            if($request->keyword)
            {

                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('subject' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('message' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('created_at' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('updated_at' , 'LIKE' , '%'.$request->keyword.'%');
            }
        })->paginate('25');
        return view('admin.mail.delete',compact('contacts','request'));
    }
}
