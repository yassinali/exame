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

<!--- Grauacademico Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('grauacademico', 'Grau academico:') !!}
    {!! Form::text('grauacademico', null, ['class' => 'form-control']) !!}
</div>

<!--- Empresa Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('empresa', 'Empresa:') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>

<!--- Datanascimento Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('datanascimento', 'Data de nascimento:') !!}
    {!! Form::text('datanascimento', null, ['class' => 'form-control']) !!}
</div>

<!--- Sexo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', array('M' => 'Masculino', 'F' => 'Femenino'), ['class' => 'form-control']) !!}
</div>

<!--- Tel Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tel', 'Telefone:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Gravar', ['class' => 'btn btn-primary']) !!}
</div>
