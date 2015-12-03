@extends('Tema1.main')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($participante, ['route' => ['participantes.update', $participante->id], 'method' => 'patch']) !!}

        @include('participantes.fields')

    {!! Form::close() !!}
</div>
@endsection
