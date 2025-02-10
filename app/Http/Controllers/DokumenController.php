<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; // Add this import
use Illuminate\Support\Str;

class DokumenController extends Controller
{

    public function index(Request $request)
    {

        return view('dokumen.index');
    }

    public function create(Request $request)
    {

      // Generate a unique nomorAju
      $nomorAju = (string) Str::uuid();

      // Pass the generated nomorAju to the view
      return view('dashboard.admin.dokumen.create', compact('nomorAju'));
    }
    public function store(Request $request)
    {
    // // Validate the incoming request data
    // $validatedData = $request->validate([
    //     'kodeJenisTpb' => 'required|string',
    //     'kodeDokumen' => 'required|string',
    //     'division_name' => 'required|string',
    // ]);

    // // Generate a unique nomorAju
    // $nomorAju = (string) Str::uuid();

    // // Pass the generated nomorAju to the view
    // return view('dashboard.admin.dokumen.create', compact('nomorAju'));
    }


}
