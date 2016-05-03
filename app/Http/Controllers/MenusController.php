<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Menu;
use Illuminate\Http\Request;
use JavaScript;

class MenusController extends Controller
{
    public function index()
    {
    	$pageTitle = 'Menus';

        JavaScript::put([
            'menus' => Menu::latest()->get(),
        ]);

    	return view('public.menus.index', compact('pageTitle'));
    }

    public function show($menu)
    {
    	$pageTitle = $menu->name;
        $related = Menu::all()->random(4);
        
    	return view('public.menus.show', compact('pageTitle', 'menu', 'related'));
    }
}
