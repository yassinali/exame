@extends('Tema1.main')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($promotores, ['route' => ['promotores.update', $promotores->id], 'method' => 'patch']) !!}

        @include('promotores.fields')

    {!! Form::close() !!}
</div>
@endsection
