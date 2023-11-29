<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class jadwalController extends Controller
{
  public function index(Request $request){
    $query = jadwal::query();
    
    // Apply search filter
    $search = $request->input('cari');
    if ($search){
        $query->where('tanggal', 'like', "%$search%");
    }

    $data = $query->get();
    $data->transform(function($item){
        $item->tanggal = Carbon::parse($item->tanggal)->format('d/m/Y');
        return $item;
    });

    $paginatedData = $query->paginate(10);

    return view('aplikasi.jadwal', compact('paginatedData', 'search'));
}

  public function addJadwal(){

    return view('add.addJadwal');
  }

  public function addJadwal_Proses(Request $req){

    $req-> validate([
      "tanggal" => 'Required',
      "kegiatan" => 'Required|min:3',
      "tempat" => 'Required|min:5',
    ]);

    $new = new jadwal();
    $new -> tanggal = $req -> tanggal;
    $new -> kegiatan = $req -> kegiatan;
    $new -> tempat = $req -> tempat;
    $new -> save();

    return Redirect('/jadwal')->with('message', 'Tambah Data Sukses');
  }

  public function edit($id){

    $data = jadwal::findorFail($id);

    return view('edit.editJadwal', compact('data'));
  }

  public function edit_proses(Request $req, $id){
      $req ->validate([
        "tanggal" => 'required',
        "kegiatan" => 'required|min:3',
        "tempat" => 'required|min:3',
      ]);

      $new = jadwal::findorFail($id);
      $new -> tanggal = $req->tanggal;
      $new -> kegiatan = $req-> kegiatan;
      $new -> tempat = $req->tempat;
      $new->save();

      return redirect('/jadwal')->with('message', 'Update Data Berhasil');
  }

  public function delete($id){
    
    $new = jadwal::findorFail($id);
    $new->delete();
    
    return back()->with('message', 'Data Berhasil Dihapus');
  }

  
}
