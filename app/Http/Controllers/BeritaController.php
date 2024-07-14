<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $data = Berita::where('judul','LIKE','%'.$request->search.'%')->get();
            if(!$data)
            {
                return view('index',compact('barang'))->with('failed', 'nama barang sudah digunakan.');
            }
        }
        else
        {
            $data = Berita::all();
        }
        
        $data  = $data->reverse();

        $data->all();

        return view('index',compact('data'));
    }

    public function dashboard(Request $request)
    {
        if($request->has('search'))
        {
            $data = Berita::where('judul','LIKE','%'.$request->search.'%')->paginate('5');
        }
        else
        {
            $data = Berita::paginate('5');

        }
        return view('dashboard',compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function formcreate(Request $request)
    {
        $data = Berita::create($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('berita/',$request->file('foto')->getClientOriginalName());
            $data->foto=$request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->Route('dashboard')->with('create', 'berita berhasil ditambahkan');
    }

    public function delete($id)
    {
        $data = Berita::find($id);
        $data->delete();

        return redirect()->Route('dashboard')->with('delete', 'berita berhasil dihapus');
    }

    public function edit($id)
    {
        $data = Berita::find($id);
        return view('edit',compact('data'));
    }

    public function formedit($id, Request $request)
    {
        $data = Berita::find($id);
        $data->update($request->all());

        return redirect()->Route('dashboard')->with('edit', 'berita berhasil diupdate');
    }

    public function viewberita($id)
    {
        $data = Berita::find($id);

        return view('viewberita',compact('data'));
    }
}
