<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArticleController extends Controller
{
    public function create() {
        return view('extends.new_articles');
    }

    public function store(Request $request){
        //dd($request->all());
        $new_item = ArtikelModel::save($request->all());

        return redirect('/artikel');
    }

    public function index() {
        $items = ArtikelModel::get_all();
        return view('extends.table', compact('items'));
    }

    public function show($id) {
        $item = ArtikelModel::find_by_id($id);
        $tag = explode(',', $item->tag);
        return view('extends.detail', compact('item','tag'));
    }

    public function edit($id) {
        $item = ArtikelModel::find_by_id($id);
        $tag = explode(',', $item->tag);

        return view('extends.edit', compact('item', 'tag'));
    }

    public function update($id, Request $request) {
        $update = ArtikelModel::update($id, $request->all());

        return redirect('/artikel');
    }

    public function destroy($id) {
        $delete = ArtikelModel::delete($id);

        return redirect('/artikel');
    }
}
