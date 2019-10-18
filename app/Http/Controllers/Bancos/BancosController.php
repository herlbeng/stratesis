<?php

namespace App\Http\Controllers\Bancos;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Banco;
use Illuminate\Http\Request;

class BancosController extends Controller
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
            $bancos = Banco::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('datos', 'LIKE', "%$keyword%")
                ->orWhere('numero', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bancos = Banco::latest()->paginate($perPage);
        }

        return view('bancos.bancos.index', compact('bancos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bancos.bancos.create');
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
        
        Banco::create($requestData);

        return redirect('bancos/bancos')->with('flash_message', 'Banco added!');
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
        $banco = Banco::findOrFail($id);

        return view('bancos.bancos.show', compact('banco'));
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
        $banco = Banco::findOrFail($id);

        return view('bancos.bancos.edit', compact('banco'));
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
        
        $banco = Banco::findOrFail($id);
        $banco->update($requestData);

        return redirect('bancos/bancos')->with('flash_message', 'Banco updated!');
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
        Banco::destroy($id);

        return redirect('bancos/bancos')->with('flash_message', 'Banco deleted!');
    }
}
