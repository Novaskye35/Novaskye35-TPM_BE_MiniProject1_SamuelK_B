<?php

namespace App\Http\Controllers;
use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function index()
    {
        $smartphones = Smartphone::all(); // Mengambil semua data dari database
        return view('smartphones.index', compact('smartphones')); // Panggil view yang benar
    }

    public function create()
    {
        return view('smartphones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'ram' => 'required|integer|min:1',
            'processor' => 'required|string|max:255',
        ]);

        Smartphone::create($request->all());
        return redirect()->route('smartphones.index');
    }
}

