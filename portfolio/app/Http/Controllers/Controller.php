<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use App\Models\message;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function about(){
        return view('about');
    }

    function projects(){
        return view('projects');
    }

    function contact(){
        return view('contact');
    }

    public function message(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
        ]);

        $message = new message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $save = $message->save();

        if($save){
            return back()->with('success', 'Your Grieviance has been registered');
        }
        else{
            return back()->with('fail', 'something went wrong try again');
        }
    }

    function download()
    {
        //$file = 'files/godwin_cv.pdf';

        //$headers = array(
          //'Content-Type: pdf',
        //);

        //return Response::download(publi$file, "sdsdsdsd", $headers);

        $path = Storage::path('public/godwin_cv.pdf');  
        return response()->download($path);
    }

    
}
