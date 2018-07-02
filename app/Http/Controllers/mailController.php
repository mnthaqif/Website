<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use Session;
use redirect;


class mailController extends Controller
{
    public function index()
    {
      return view ('Contact');
    }

    public function postContact(Request $request)
    {
      $this->validate($request, [
        'name'=>'min:3',
        'email'=>'required|email',
        'subject'=> 'min:3',
        'message'=>'min:5'
      ]);

        $data = array(
          'name' => $request-> name,
          'email' => $request-> email,
          'subject' => $request-> subject,
          'bodyMessage' => $request-> message
        );

        Mail::send('mail.mail', $data, function($message) use ($data)
        {
          $message-> subject ($data['subject']);
          $message-> from ($data['email']);
          $message-> to ('thaqif_rajab@integrasys.my');
        });

        return redirect('/Contact')->with('mesej', 'Message successfully sent, Thanks for contacting us!!');


      //   'name' =>'required',
      //   'email'=>'required',
      //   'message'=>'required'
      // ]);
      //
      // $data = [
      //   'name'=>$req->name,
      //   'email'=>$req->email,
      //   'bodyMessage'=>$req->message,
      // ];
      //
      // Mail::send('mail.mail',$data,function($message) use ($data){
      //     // $message->from($data['email']);
      //     // $message->to('mdnurthaqif@gmail.com');
      //   $message->from('mdnurthaqif@gmail.com','laravel2');
      //   $message->to($data['email']);
      // });
      //
      // return redirect()->back();

    }
}
