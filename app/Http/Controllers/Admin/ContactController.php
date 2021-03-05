<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $dataContact = Contact::orderBy('created_at')->get();
        return view('admin.pages.contact.index', compact('dataContact'));
    }

    public function destroy(Contact $contact){
        $contact->delete();

        return redirect()->route('contact.index')->with('hapus', 'Data Contact Berhasil Dihapus');
    }
}
