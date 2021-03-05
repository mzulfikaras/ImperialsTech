<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index(){
        $dataTesti = Testimoni::all();
        return view('admin.pages.testimoni.index', compact('dataTesti'));
    }

    public function create(){
        return view('admin.pages.testimoni.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'deskripsi' => 'required',
            'client' => 'required',
            'jabatan' => ''
        ]);

        Testimoni::create($validateData);
        $request->session()->flash('pesan', 'Data Testimonial Berhasil di tambahkan');
        return redirect()->route('testi.index');
    }

    public function edit(Testimoni $testi){
        return view('admin.pages.testimoni.edit', compact('testi'));
    }

    public function update(Request $request, Testimoni $testi){
        $validateData = $request->validate([
            'deskripsi' => 'required',
            'client' => 'required',
            'jabatan' => ''
        ]);

        $testi->update($validateData);
        $request->session()->flash('pesan', 'Data Testimonial Berhasil di update');
        return redirect()->route('testi.index');
    }

    public function destroy(Testimoni $testi){
        $testi->delete();
        return redirect()->route('testi.index')->with('hapus','Data Testimonial Berhasil dihapus');
    }
}
