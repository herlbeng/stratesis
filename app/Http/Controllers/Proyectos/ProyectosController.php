<?php

namespace App\Http\Controllers\Proyectos;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Proyecto;
use App\User;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        $userid = Auth::id();
        if (!empty($keyword)) {
            $proyectos = Proyecto::where('alunno', 'LIKE', "%$keyword%")
                ->orWhere('tutor', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('entrega', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('avance', 'LIKE', "%$keyword%")
                ->orWhere('link', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $proyectos = Proyecto::latest()->paginate($perPage);
        }

        return view('proyectos.proyectos.index', compact('proyectos','userid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $userid = Auth::id();
        $dato=user::where('role','user')->paginate(1000);
        $dato2=user::where('role','Instructor')->paginate(1000);

        return view('proyectos.proyectos.create', compact('dato','dato2','userid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Proyecto::create($requestData);

        return redirect('proyectos/proyectos')->with('flash_message', 'Proyecto added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('proyectos.proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $userid = Auth::id();

        return view('proyectos.proyectos.edit', compact('proyecto','userid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($requestData);

        return redirect('proyectos/proyectos')->with('flash_message', 'Proyecto updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Proyecto::destroy($id);

        return redirect('proyectos/proyectos')->with('flash_message', 'Proyecto deleted!');
    }
}
