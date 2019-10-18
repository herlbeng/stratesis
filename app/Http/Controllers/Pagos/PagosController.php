<?php

namespace App\Http\Controllers\Pagos;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Pago;
use App\User;
use App\banco;
use App\proyecto;
use Illuminate\Http\Request;

class PagosController extends Controller
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
            $pagos = Pago::where('cliente', 'LIKE', "%$keyword%")
                ->orWhere('referencia', 'LIKE', "%$keyword%")
                ->orWhere('modo', 'LIKE', "%$keyword%")
                ->orWhere('banco', 'LIKE', "%$keyword%")
                ->orWhere('monto', 'LIKE', "%$keyword%")
                ->orWhere('proyecto', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pagos = Pago::latest()->paginate($perPage);
        }

        return view('pagos.pagos.index', compact('pagos','userid'));
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
        $dato2=banco::paginate(1000);
        $dato3=proyecto::where('alunno',$userid)->paginate(1000);
        return view('pagos.pagos.create',compact('dato','dato2','dato3','userid'));
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
        
        Pago::create($requestData);

        return redirect('pagos/pagos')->with('flash_message', 'Pago added!');
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
        $pago = Pago::findOrFail($id);

        return view('pagos.pagos.show', compact('pago'));
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
		  $userid = Auth::id();
		  $dato=user::where('role','user')->paginate(1000);
        $dato2=banco::paginate(1000);
        $dato3=proyecto::where('alunno',$userid)->paginate(1000);
        $pago = Pago::findOrFail($id);

        return view('pagos.pagos.edit', compact('pago','userid','dato','dato2','dato3'));
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
        
        $pago = Pago::findOrFail($id);
        $pago->update($requestData);

        return redirect('pagos/pagos')->with('flash_message', 'Pago updated!');
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
        Pago::destroy($id);

        return redirect('pagos/pagos')->with('flash_message', 'Pago deleted!');
    }
}
