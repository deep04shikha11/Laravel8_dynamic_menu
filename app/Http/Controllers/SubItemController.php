<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubMenuRequest;
use App\Http\Requests\UpdateSubMenuRequest;
use Illuminate\Http\Request;
use App\Models\SubMenu;
use App\Models\Menu;

class SubItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        $submenu = SubMenu::all();
        return view('subitem.index', compact('menus', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('subitem.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubMenuRequest $request)
    {
        SubMenu::create($request->validated());

        return redirect()->route('subitem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = SubMenu::find($id);
        return view('subitem.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main_menus = Menu::all();
        $menu = SubMenu::find($id);
        return view('subitem.edit', compact('menu', 'main_menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $submenu = SubMenu::find($id);
        $rules = $request->validate([
            'name' => ['required', 'string',],
            'menu_link' => ['required', 'string',],
            'menu_id' => ['required',]
        ]);
        $submenu->update($rules);
        return redirect()->route('subitem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menus = Menu::all();
        $menu = SubMenu::find($id);
        $menu->delete();
        $submenu = SubMenu::all();
        return redirect()->route('subitem.index');
    }
}
