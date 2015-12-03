@extends('Tema1.main')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'participantes.store']) !!}

        @include('participantes.fields')

    {!! Form::close() !!}
</div>
@endsection
