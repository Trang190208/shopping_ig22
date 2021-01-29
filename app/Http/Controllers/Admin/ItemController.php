<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\ItemRequest;


class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        $data = ['items'=> $items];
        return view('admin.item.index');
    }

    public function create()
    {
        
        return view('admin.item.create');
    }

    public function add(ItemRequest $request)
    {    
        
        $posts = $request->all();
        Item::create($posts);
        return redirect()->route('admin.item.index');
    }

    public function edit(Request $request)
    {
        $data = ['id' => $request->id];
        return view('admin.item.edit', $data);
    }

    //
}
