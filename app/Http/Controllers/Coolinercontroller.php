<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coolinermodel;
use Illuminate\Support\Facades\DB;


class CoolinerController extends Controller
{
        public function index()
        {
            $cooliners = DB::table('cooliner_table')->get();
            return view('index', ['cooliners' => $cooliners] );
        }

        public function create()
        {
            return view('index');
        }

        public function store(Request $request){
            Coolinermodel::create([
            'nama' => $request->nama,
            'asal_daerah' => $request->asal_daerah,
            'deskripsi' => $request->deskripsi,
            ]);

            return redirect('index');
        }

        public function edit(string $id){
            $cooliners = Coolinermodel::find($id);
            return view('edit', ['cooliner' => $cooliners]);
        }
    
        public function update(Request $request, string $id)
        {
            $request->validate([
                'nama' => 'bail|required',
                'asal_daerah' => 'required',
                'deskripsi' => 'required'
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'asal_daerah.required' => 'Asal daerah wajib diisi',
                'deskripsi.required' => 'Deskripsi wajib diisi'
            ]);

            $cooliner = Coolinermodel::findOrFail($id);
            $cooliner->update([
                'nama' => $request->nama,
                'asal_daerah' => $request->asal_daerah,
                'deskripsi' => $request->deskripsi
            ]);

            return redirect('index')->with('success', 'Update Success');
        }
    }