<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $dataClient = Client::orderBy('created_at','DESC')->get();
        return view('admin.pages.client.index', compact('dataClient'));
    }

    public function create(){
        return view('admin.pages.client.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'project' => 'required',
            'nama' => 'required',
            'awal_kontrak' => 'required',
            'akhir_kontrak' => 'required'
        ]);

        Client::create($validateData);
        $request->session()->flash('pesan','Data Client Berhasih ditambahkan');
        return redirect()->route('client.index');
    }

    public function edit(Client $client){
        return view('admin.pages.client.edit', compact('client'));
    }

    public function update(Request $request,Client $client){
        $validateData = $request->validate([
            'project' => 'required',
            'nama' => 'required',
            'awal_kontrak' => 'required',
            'akhir_kontrak' => 'required'
        ]);

        $client->update($validateData);
        $request->session()->flash('pesan','Data Client Berhasih diupdate');
        return redirect()->route('client.index');
    }

    public function destroy(Client $client){
        $client->delete();
        return redirect()->route('client.index')->with('hapus','Data Client Berhasil Dihapus');
    }
}
