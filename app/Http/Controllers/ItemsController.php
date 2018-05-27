<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function home(){
    	return view('tasks.index');
    }
     public function index()
    {
         
        $items = Item::all();
        return view('items.index',[
        'items' => $items
        	            ]);
    }
}

