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
            $request->validate([
                'seriDokumen' => 'required|string|max:255',
                'division_name' => 'required|string',
                'kodeDokumen' => 'required|string|max:255',
                'tanggalDokumen' => 'required|date',
            ]);

            $dokumen = new Dokumen([
                'seri_dokumen' => $request->get('seriDokumen'),
                'division_name' => $request->get('division_name'),
                'kode_dokumen' => $request->get('kodeDokumen'),
                'tanggal_dokumen' => $request->get('tanggalDokumen'),
            ]);

            $dokumen->save();

            return redirect()->route('dokumen.index')->with('success', 'Dokumen berhasil disimpan');
        }

    }

