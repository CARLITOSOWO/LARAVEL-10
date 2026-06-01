<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class ContactanosController extends Controller
{
public function index(){
    return view('contactanos.index');
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'correo' => 'required | email',
        'mensaje' => 'required'

    ]);



    Mail::to('guerramuertec@gmail.com')->send(new ContactanosMailable($request->all()));

    // session()->flash('info', 'MENSAJE ENVIADO CON SESSION 😁😁😁😁🥞');//1ER FORMA CON HELPER SESSION

    return redirect()->route('contactanos.index')->with('info', 'MENSAJE ENVIADO CON WITH 😁😁😁😁🥞');
}

}