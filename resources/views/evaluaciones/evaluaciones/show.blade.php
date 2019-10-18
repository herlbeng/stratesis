@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Evaluacione {{ $evaluacione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/evaluaciones/evaluaciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/evaluaciones/evaluaciones/' . $evaluacione->id . '/edit') }}" title="Edit Evaluacione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['evaluaciones/evaluaciones', $evaluacione->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Evaluacione',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $evaluacione->id }}</td>
                                    </tr>
                                    <tr><th> Usuario </th><td> {{ $evaluacione->usuario }} </td></tr><tr><th> Prueba </th><td> {{ $evaluacione->prueba }} </td></tr><tr><th> Respuesta </th><td> {{ $evaluacione->respuesta }} </td></tr><tr><th> Puntaje </th><td> {{ $evaluacione->puntaje }} </td></tr><tr><th> Estado </th><td> {{ $evaluacione->estado }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
