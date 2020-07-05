<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{

  public static function semua_artikel(){
    $artikel = DB::table('artikel')->get();
    return $artikel;
  }

  public static function get_artikel_id($id){
    $artikel = DB::table('artikel')->where('id', $id)->first();
    return $artikel;
  }

  public static function simpan($data){
    $artikel_baru = DB::table('artikel')->insert($data);
    return $artikel_baru;
  }

  public static function update($id, $data){
    $new = DB::table('artikel')->where('id', $id)->update($data);
    return $new;
  }

  public static function hapus($id){
    $delete = DB::table('artikel')->where('id', $id)->delete();
    return $delete;
  }

}

 ?>
