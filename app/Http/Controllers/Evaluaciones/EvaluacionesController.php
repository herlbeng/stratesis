<?php

namespace App\Http\Controllers\Evaluaciones;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Evaluacione;
use Illuminate\Http\Request;

class EvaluacionesController extends Controller
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

        if (!empty($keyword)) {
            $evaluaciones = Evaluacione::where('usuario', 'LIKE', "%$keyword%")
                ->orWhere('prueba', 'LIKE', "%$keyword%")
                ->orWhere('respuesta', 'LIKE', "%$keyword%")
                ->orWhere('puntaje', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('notas', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $evaluaciones = Evaluacione::latest()->paginate($perPage);
        }

        return view('evaluaciones.evaluaciones.index', compact('evaluaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('evaluaciones.evaluaciones.create');
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
        
        Evaluacione::create($requestData);

        return redirect('evaluaciones/evaluaciones')->with('flash_message', 'Evaluacione added!');
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
        $evaluacione = Evaluacione::findOrFail($id);

        return view('evaluaciones.evaluaciones.show', compact('evaluacione'));
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
        $evaluacione = Evaluacione::findOrFail($id);

        return view('evaluaciones.evaluaciones.edit', compact('evaluacione'));
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
        
        $evaluacione = Evaluacione::findOrFail($id);
        $evaluacione->update($requestData);

        return redirect('evaluaciones/evaluaciones')->with('flash_message', 'Evaluacione updated!');
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
        Evaluacione::destroy($id);

        return redirect('evaluaciones/evaluaciones')->with('flash_message', 'Evaluacione deleted!');
    }
}
