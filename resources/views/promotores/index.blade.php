@extends('Tema1.main')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Lista dos promotores</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('promotores.create') !!}">Novo</a>
        </div>

        <div class="row">
            @if($promotores->isEmpty())
                <div class="well text-center">Sem registos.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Nome</th>
			<th>Apelido</th>
			<th>Telf</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($promotores as $promotores)
                        <tr>
                            <td>{!! $promotores->nome !!}</td>
					<td>{!! $promotores->apelido !!}</td>
					<td>{!! $promotores->telf !!}</td>
                            <td>
                                <a href="{!! route('promotores.edit', [$promotores->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('promotores.delete', [$promotores->id]) !!}" onclick="return confirm('Are you sure wants to delete this promotores?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection