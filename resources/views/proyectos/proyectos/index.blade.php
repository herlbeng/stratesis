@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proyectos</div>
                    <div class="card-body">
                       
                    @if (Auth::user()->hasRole('Instructor'))
                       
                    @else   
                        <a href="{{ url('/proyectos/proyectos/create') }}" class="btn btn-success btn-sm" title="Add New Proyecto">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    @endif
                        {!! Form::open(['method' => 'GET', 'url' => '/proyectos/proyectos', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
            
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Alunno</th><th>Tutor</th><th>Nombre</th><th>Descripcion</th><th>Entrega</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($proyectos as $item)
                                @if (Auth::user()->hasRole('Admin'))
                                <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->alunno }}</td><td>{{ $item->tutor }}</td><td>{{ $item->nombre }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->entrega }}</td>
                                        <td>
                                            <a href="{{ url('/proyectos/proyectos/' . $item->id) }}" title="View Proyecto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/proyectos/proyectos/' . $item->id . '/edit') }}" title="Edit Proyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/proyectos/proyectos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Proyecto',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>

                                @elseif(Auth::user()->hasRole('User'))



                                @if ($userid==$item->alunno)
                                
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->alunno }}</td><td>{{ $item->tutor }}</td><td>{{ $item->nombre }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->entrega }}</td>
                                        <td>
                                            <a href="{{ url('/proyectos/proyectos/' . $item->id) }}" title="View Proyecto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/proyectos/proyectos/' . $item->id . '/edit') }}" title="Edit Proyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/proyectos/proyectos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Proyecto',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endif
                                @else
                                
                                @if ($userid==$item->tutor)
                                
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->alunno }}</td><td>{{ $item->tutor }}</td><td>{{ $item->nombre }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->entrega }}</td>
                                        <td>
                                            <a href="{{ url('/proyectos/proyectos/' . $item->id) }}" title="View Proyecto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            
                                        </td>
                                    </tr>
                                    @endif
                                @endif
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $proyectos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
