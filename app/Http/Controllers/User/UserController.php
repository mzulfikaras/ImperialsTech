<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $produk = Produk::all();
        $testi = Testimoni::all();
        return view('user.pages.home.index', compact('produk','testi'));
    }

    public function getContact(){
        return view('user.pages.contact.index');
    }

    public function createContact(Request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);

        Contact::create($validateData);
        $request->session()->flash('pesan', 'Message sent successfully. Thanks For Your Message!');
        return redirect()->route('user.contact');
    }
}
