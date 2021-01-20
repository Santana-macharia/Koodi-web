<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function uploadSong()
    {
        return view('admin.create_ad');
    }
    public function uploadFile(Request $req)
    {
        $req->file->store('public');
        return "File has been successfully uploaded";
    }

}
