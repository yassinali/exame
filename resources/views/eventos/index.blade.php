@extends('Tema1.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
        @include('flash::message')
        <div class="panel">
        <header class="panel-heading">
             <h1 class="pull-left">Lista de eventos</h1>
             <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('eventos.create') !!}">Novo</a>
        </header>
      

            @if($eventos->isEmpty())
                <div class="well text-center">Sem eventos.</div>
            @else
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <th>Titulo</th>
			<th>Tipo</th>
			<th>Descricao</th>
			<th>Local</th>
			<th>Agenda</th>
			<th>Idpromotor Fk</th>
			<th>Status</th>
                    <th width="50px">Accoes</th>
                    </thead>
                    <tbody>
                     
                    @foreach($eventos as $eventos)
                        <tr>
                            <td>{!! $eventos->titulo !!}</td>
					<td>{!! $eventos->tipo !!}</td>
					<td>{!! $eventos->descricao !!}</td>
					<td>{!! $eventos->local !!}</td>
					<td>{!! $eventos->agenda !!}</td>
					<td>{!! $eventos->idpromotor_fk !!}</td>
					<td>{!! $eventos->status !!}</td>
                            <td>
                                <a href="{!! route('eventos.edit', [$eventos->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('eventos.delete', [$eventos->id]) !!}" onclick="return confirm('Tem certeza que pretende apagar este evento?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            @endif
        </div>
        </div>
    </div>
   </div>
@endsection