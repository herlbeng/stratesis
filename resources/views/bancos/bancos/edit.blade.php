@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar Banco #{{ $banco->nombre }}</div>
                    <div class="card-body">
                        <a href="{{ url('/bancos/bancos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($banco, [
                            'method' => 'PATCH',
                            'url' => ['/bancos/bancos', $banco->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('bancos.bancos.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
