<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        $products = Product::all();
        //  dd($products->isNotEmpty());
        return view('welcome', ['products' => $products]);
    }

    public function contacts(){
        return view('contacts');
    }

    public function submit (Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $user = compact('name', 'email', 'message');
        Mail::to($email)->send(new ContactMail($user));

        return redirect(route ('homepage'))->with('message' , 'La tua email è stata inviata con successo!');
    }
}
