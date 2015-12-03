@extends('Tema1.main')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'eventos.store']) !!}

        @include('eventos.fields')

    {!! Form::close() !!}
</div>
@endsection
