@extends('Tema1.main')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Lista dos participantes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('participantes.create') !!}">Novo participante</a>
        </div>

        <div class="row">
            @if($participantes->isEmpty())
                <div class="well text-center">Sem participantes.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Nome</th>
			<th>Apelido</th>
			<th>Grau academico</th>
			<th>Empresa</th>
			<th>Data de nascimento</th>
			<th>Sexo</th>
			<th>Telfone</th>
			<th>E-mail</th>
                    <th width="50px">Accoes</th>
                    </thead>
                    <tbody>
                     
                    @foreach($participantes as $participante)
                        <tr>
                            <td>{!! $participante->nome !!}</td>
					<td>{!! $participante->apelido !!}</td>
					<td>{!! $participante->grauacademico !!}</td>
					<td>{!! $participante->empresa !!}</td>
					<td>{!! $participante->datanascimento !!}</td>
					<td>{!! $participante->sexo !!}</td>
					<td>{!! $participante->tel !!}</td>
					<td>{!! $participante->email !!}</td>
                            <td>
                                <a href="{!! route('participantes.edit', [$participante->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('participantes.delete', [$participante->id]) !!}" onclick="return confirm('Are you sure wants to delete this Participante?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection