<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
      $all = ArtikelModel::semua_artikel();
      return view('konten.list', compact('all'));
    }

    public function form(){
      return view('konten.form');
    }

    public function simpan(Request $request){
      $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->judul)));
      $data = ['judul' => $request->judul,
                'isi' => $request->isi,
                'slug' => $slug,
                'tag' => strtolower($request->tag),
                'created_at' => now(),
                'updated_at' => now()
              ];
      $artikel = ArtikelModel::simpan($data);
      if($artikel){
        return redirect('/artikel');
      }
    }

    public function detail($id){
      $artikel = ArtikelModel::get_artikel_id($id);
      $tag = explode(",", $artikel->tag);
      $newtag = [];
      foreach($tag as $t){
        array_push($newtag, trim($t));
      }
      return view('konten.detail', compact('artikel', 'newtag'));
    }

    public function formEdit($id){
      $artikel = ArtikelModel::get_artikel_id($id);
      return view('konten.edit', compact('artikel'));
    }

    public function update(Request $request, $id){
      $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->judul)));
      $data = ['judul' => $request->judul,
                'isi' => $request->isi,
                'slug' => $slug,
                'tag' => strtolower($request->tag),
                'updated_at' => now()
              ];
      $artikel = ArtikelModel::update($id, $data);
      if($artikel){
        return redirect('/artikel/'.$id);
      }
    }

    public function hapus($id){
      $delete = ArtikelModel::hapus($id);
      return redirect('/artikel');
    }
}
