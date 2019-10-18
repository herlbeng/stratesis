@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Proyecto #{{ $proyecto->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/proyectos/proyectos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($proyecto, [
                            'method' => 'PATCH',
                            'url' => ['/proyectos/proyectos', $proyecto->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('proyectos.proyectos.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
