<?php

namespace App\Http\Controllers;

use App\Models\QRCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        $urls = QRCode::all();
        $recent = \App\Models\QRCode::latest()->pluck('url')->first();
        return view('qrcode', ['recent' => $recent]);
    }
    public function store(Request $request)
    {
        $qrCode = new QRCode();
        $qrCode->url = $request->url;
        $qrCode->save();
        return redirect('qrcode');
    }
}
