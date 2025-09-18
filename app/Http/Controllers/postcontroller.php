<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postcontroller extends Controller
{
    public function createPost(Request $request)
    {
        // Validasi input
        $incomingField = $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]); // memastikan semua kolom terisi

        // Membersihkan data dari tag HTML agar aman
        $incomingField['title'] = strip_tags($incomingField['title']);
        $incomingField['body']  = strip_tags($incomingField['body']);

        // Simpan ke database
        post::create($incomingField);

        // Redirect ke halaman home
        return redirect('/home');
    }
}
