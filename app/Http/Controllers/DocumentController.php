<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\GenerateAndSendPdfJob;


class DocumentController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        GenerateAndSendPdfJob::dispatch($data);

        return back()->with('success', 'Votre document est en cours de génération et sera envoyé par email.');
    }
}
