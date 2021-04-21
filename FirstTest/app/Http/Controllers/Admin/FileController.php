<?php

namespace App\Http\Controllers\Admin;
use App\Models\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('admin.file.list',compact('files'))->with('panel_title' , 'لیست فایل ها');
    }

    public function create()
    {

        return view('admin.file.create')->with('panel_title','ایجاد فایل جدید');
    }
}
