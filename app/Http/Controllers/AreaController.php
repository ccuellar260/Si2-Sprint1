<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::get();
        return view('Areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('crate sera create');
        return view('Areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        // dd('crate sera');
        $a = new Area();
        $a->nombre = $r->nombre ;
        $a->descripcion = $r->descripcion;
        $a->save();

        return redirect()->route('areas.index');
    }

    public function show(Area $area)
    {
                // dd('crate sera shoe');
        return view('Areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        // dd('crate sera');z
        return view('Areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, Area $area)
    {
             // dd('crate sera');
             $area->nombre = $r->nombre ;
             $area->descripcion = $r->descripcion;
             $area->save();

             return redirect()->route('areas.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('areas.index');
    }
}
