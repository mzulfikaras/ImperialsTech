<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Jobdesk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobdeskController extends Controller
{
    public function index(){
        $dataJobdesk = Jobdesk::all();

        return view('admin.pages.jobdesk.index', compact('dataJobdesk'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'jobdesk' => 'required',
            'client_id' => 'required',
            'desc' => '',
        ]);

        if($request->img){
            $validateData['img'] = $request->file('img')->store('assets/admin/jobdesk','public');
        }

        Jobdesk::create($validateData);
        $request->session()->flash('pesan','Jobdesk Berhasil Ditambahkan');
        return redirect()->route('jobdesk.index');
    }

    public function edit(Jobdesk $jobdesk){
        $client = Client::all();
        return view('admin.pages.jobdesk.edit', compact('jobdesk','client'));
    }

    public function update(Request $request, Jobdesk $jobdesk){
        $jobdeskId = $jobdesk->find($jobdesk->id);
        $validateData = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'jobdesk' => 'required',
            'client_id' => 'required',
            'desc' => '',
        ]);

        if($request->img){
            Storage::delete('public/'.$jobdeskId->img);
            $validateData['img'] = $request->file('img')->store('assets/admin/jobdesk','public');
        }

        $jobdesk->update($validateData);
        $request->session()->flash('pesan','Jobdesk Berhasil Diupdate');
        return redirect()->route('jobdesk.index');
    }

    public function destroy(Jobdesk $jobdesk){
        $jobdeskId = $jobdesk->find($jobdesk->id);
        Storage::delete('public/'.$jobdeskId->img);
        $jobdesk->delete();
        return redirect()->route('jobdesk.index')->with('hapus','Jobdesk Berhasil Dihapus');
    }
}
