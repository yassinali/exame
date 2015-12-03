@extends('Tema1.main')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($eventos, ['route' => ['eventos.update', $eventos->id], 'method' => 'patch']) !!}

        @include('eventos.fields')

    {!! Form::close() !!}
</div>
@endsection
