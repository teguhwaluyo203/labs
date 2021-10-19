<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/admintemplate');
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function datamaster()
    {
        return view('admin/datamaster');
    }
    public function databarang()
    {
        return view('admin/databarang');
    }
    public function jenisbarang()
    {
        return view('admin/jenisbarang');
    }
    public function satuan()
    {
        return view('admin/satuan');
    }
    public function tambahdata()
    {
        return view('admin/tambahdata');
    }
}
