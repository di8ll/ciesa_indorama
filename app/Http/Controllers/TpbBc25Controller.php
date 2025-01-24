<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; // Add this import

class TpbBc25Controller extends Controller
{

    public function index(Request $request)
    {

        return view('dashboard.admin.dokumen.index');
    }

    public function create(Request $request)
    {

        return view('dashboard.admin.dokumen.create');
    }
    public function store(Request $request)
    {

    }


}
