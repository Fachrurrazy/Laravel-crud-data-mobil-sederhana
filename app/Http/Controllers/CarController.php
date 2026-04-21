<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all(); 
        $nama = 'razy';
        return view('home', compact('cars','nama'));

    }

    public function create()
    {
        return view('tambah');
    }

   public function store(Request $request)
{
    // Hapus atau comment baris dd() ini
    // dd($request->all());
    
    $request->validate([
        'merek' => 'required',
        'warna' => 'required',
        'tahun' => 'required|integer',
        'harga' => 'required|numeric',
        'no_plat' => 'required|unique:car,no_plat',
    ]);

    Car::create([
        'merek' => $request->merek,
        'warna' => $request->warna,
        'tahun' => $request->tahun,
        'harga' => $request->harga,
        'no_plat' => $request->no_plat,
    ]);

    return redirect()->route('home')->with('success', 'Data mobil berhasil ditambahkan!');
}


    public function edit($id_car)
        {
            $car = Car::findOrFail($id_car);
            return view('edit', compact('car'));
        }


    public function update(Request $request, $id_car)
    {
        $car = Car::findOrFail($id_car);
        
        $request->validate([
            'merek' => 'required',
            'warna' => 'required',
            'tahun' => 'required|integer',
            'harga' => 'required|numeric',
            'no_plat' => 'required|unique:car,no_plat,' . $id_car . ',id_car',
        ]);

        $car->update([
            'merek' => $request->merek,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'no_plat' => $request->no_plat,
        ]);

        return redirect()->route('home')->with('success', 'Data mobil berhasil diupdate!');
    }

   
    public function delete($id_car)
    {
        $car = Car::findOrFail($id_car);
        $car->delete();
        
        return redirect()->route('home')->with('success', 'Data mobil berhasil dihapus!');
    }
}
