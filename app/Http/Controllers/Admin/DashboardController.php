<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Produk;
use App\Models\Report;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $produk = Produk::with([])->get();
        $report = Report::with([])->get();
        $client = Client::with([])->get();
        $contact = Contact::with([])->get();
        return view('admin.pages.dashboard.index', compact('produk','report','client','contact'));
    }
}
