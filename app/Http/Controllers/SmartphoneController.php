<?php

namespace App\Http\Controllers;
use App\Models\Smartphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SmartphoneController extends Controller
{
    public function index()
    {
        $smartphones = Smartphone::all(); // Ambil semua data dari tabel smartphones
    return view('smartphones.index', compact('smartphones')); // Kirim data ke view
    }
    public function create()
    {
        return view('smartphones.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'manufacturer' => 'required',
        'ram' => 'required|integer',
        'processor' => 'required',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images', 'public');
        $validated['image'] = $path;
    }

    Smartphone::create($validated);

    return redirect()->route('smartphones.index')->with('success', 'Smartphone added successfully.');
}
public function update(Request $request, Smartphone $smartphone)
{
    $validated = $request->validate([
        'name' => 'required',
        'manufacturer' => 'required',
        'ram' => 'required|integer',
        'processor' => 'required',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($smartphone->image) {
            Storage::disk('public')->delete($smartphone->image);
        }

        $path = $request->file('image')->store('images', 'public');
        $validated['image'] = $path;
    }

    $smartphone->update($validated);

    return redirect()->route('smartphones.index')->with('success', 'Smartphone updated successfully.');
}

public function destroy(Smartphone $smartphone)
{
    if ($smartphone->image) {
        Storage::disk('public')->delete($smartphone->image);
    }

    $smartphone->delete();

    return redirect()->route('smartphones.index')->with('success', 'Smartphone deleted successfully.');
}



}
