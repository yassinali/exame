@extends('Tema1.main')

@section('content')
<div class="container">
    
        <header class="panel-heading">
             <h1>Registo de promotores</h1>
        </header>
    @include('common.errors')

    {!! Form::open(['route' => 'promotores.store']) !!}

        @include('promotores.fields')

    {!! Form::close() !!}
  
</div>
@endsection
