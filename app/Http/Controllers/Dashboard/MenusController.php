<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateUpdateMenuRequest;
use App\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {
    	$menus = Menu::latest()->get();
    	return view('dashboard.menus.index', compact('menus'));
    }

    public function show($menu)
    {
    	return view('dashboard.menus.show', compact('menu'));
    }

    public function create()
    {
    	return view('dashboard.menus.create');
    }

    public function store(CreateUpdateMenuRequest $request)
    {
    	return Menu::create($request->all());
    }

    public function edit($menu)
    {
        return view('dashboard.menus.edit', compact('menu'));
    }

    public function update(CreateUpdateMenuRequest $request, $menu)
    {
        $menu->update($request->all());
    }

    public function destroy($menu)
    {
        $menu->delete();
    }
}
