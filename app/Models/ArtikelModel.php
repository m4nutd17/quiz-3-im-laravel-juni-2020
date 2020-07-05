<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    //
    public static function get_all() {
        $items = DB::table('articles')->get();
        return $items;
    }

    public static function save($data)  {
        unset($data["_token"]);
        $data['slug'] = strtolower(str_replace(' ', '-', $data['judul']));
        $new_item = DB::table('articles')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id)  {
        $item = DB::table('articles')->where('id', $id)->first();
        return $item;
    }

    public static function update($id, $data) {
        $update = DB::table('articles')
            ->where('id', $id)
            ->update([
                'judul' => $data['judul'],
                'isi' => $data['isi'],
                'slug' => strtolower(str_replace(' ', '-', $data['judul'])),
                'tag' => $data['tag'],
            ]);

        return $update;
    }

    public static function delete($id) {
        $delete = DB::table('articles')->delete($id);

        return $delete;
    }

}