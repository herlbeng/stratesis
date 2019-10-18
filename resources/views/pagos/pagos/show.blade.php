@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
         

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Pago {{ $pago->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pagos/pagos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pagos/pagos/' . $pago->id . '/edit') }}" title="Edit Pago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pagos/pagos', $pago->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Pago',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pago->id }}</td>
                                    </tr>
                                    <tr><th> Cliente </th><td> {{ $pago->cliente }} </td></tr><tr><th> Referencia </th><td> {{ $pago->referencia }} </td></tr><tr><th> Modo </th><td> {{ $pago->modo }} </td></tr><tr><th> Banco </th><td> {{ $pago->banco }} </td></tr><tr><th> Monto </th><td> {{ $pago->monto }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
