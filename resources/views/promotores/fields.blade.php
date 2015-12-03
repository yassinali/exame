<!--- Nome Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!--- Apelido Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('apelido', 'Apelido:') !!}
    {!! Form::text('apelido', null, ['class' => 'form-control']) !!}
</div>

<!--- Telf Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telf', 'Telf:') !!}
    {!! Form::text('telf', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Gravar', ['class' => 'btn btn-primary']) !!}
</div>
