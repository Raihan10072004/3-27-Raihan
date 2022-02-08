<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController-resource extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts',[
            "tittle" => "Contacts"
        ]);
    }
    
}
