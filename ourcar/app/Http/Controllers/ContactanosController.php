<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){
        $correo = new ContactoMailable($request->all());

        Mail::to('myourcarinfo@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}
