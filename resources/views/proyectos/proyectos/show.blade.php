@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
    

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proyecto {{ $proyecto->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/proyectos/proyectos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                      
                      
                      
                        @if (Auth::user()->hasRole('Instructor'))
                       
                       @else   
                      
                      
                      
                        <a href="{{ url('/proyectos/proyectos/' . $proyecto->id . '/edit') }}" title="Edit Proyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['proyectos/proyectos', $proyecto->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Proyecto',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        @endif
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $proyecto->id }}</td>
                                    </tr>
                                    <tr><th> Alunno </th><td> {{ $proyecto->alunno }} </td></tr><tr><th> Tutor </th><td> {{ $proyecto->tutor }} </td></tr><tr><th> Nombre </th><td> {{ $proyecto->nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $proyecto->descripcion }} </td></tr><tr><th> Entrega </th><td> {{ $proyecto->entrega }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
