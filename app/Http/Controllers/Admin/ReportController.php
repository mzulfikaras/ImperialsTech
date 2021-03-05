<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Report;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $dataReport = Report::orderBy('created_at','DESC')->paginate(10);
        return view('admin.pages.report.index', compact('dataReport'));
    }

    public function create(){
        $client = Client::all();
        return view('admin.pages.report.create', compact('client'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'client_id' => 'required',
            'tgl_report' => 'required',
            'website_desc' => '',
            'google_desc' => '',
            'fb_desc' => '',
            'ig_desc' => '',
            'sosmed_desc' => '',
            'yt_desc' => ''
        ]);

        Report::create($validateData);
        $request->session()->flash('pesan','Data Report Berhasil Ditambahkan');
        return redirect()->route('report.index');
    }

    public function edit(Report $report){
        $client = Client::all();
        return view('admin.pages.report.edit', compact('report','client'));
    }

    public function update(Request $request, Report $report){
        $validateData = $request->validate([
            'client_id' => 'required',
            'tgl_report' => 'required',
            'website_desc' => '',
            'google_desc' => '',
            'fb_desc' => '',
            'ig_desc' => '',
            'sosmed_desc' => '',
            'yt_desc' => ''
        ]);

        $report->update($validateData);
        $request->session()->flash('pesan','Data Report Berhasil Diupdate');
        return redirect()->route('report.index');
    }

    public function destroy(Report $report){
        $report->delete();
        return redirect()->route('report.index')->with('hapus','Data Report Berhasil dihapus');
    }

    public function printReport(Report $report){
        $printReport = PDF::loadview('admin.pages.report.pdf', ['report' => $report])->setPaper('a3','potrait');

        return $printReport->stream();
    }
}
