<!--- Titulo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!--- Tipo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo', 'Tipo:') !!}
   {!! Form::select('tipo', array('Palestras' => 'Palestras', 'Workshops' => 'Workshops'), ['class' => 'form-control']) !!}
</div>

<!--- Descricao Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!--- Local Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('local', 'Local:') !!}
    {!! Form::text('local', null, ['class' => 'form-control']) !!}
</div>

<!--- Agenda Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('agenda', 'Agenda:') !!}
    {!! Form::text('agenda', null, ['class' => 'form-control']) !!}
</div>

<!--- Idpromotor Fk Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('idpromotor_fk', 'Idpromotor Fk:') !!}
    {!! Form::text('idpromotor_fk', null, ['class' => 'form-control']) !!}
</div>

<!--- Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('Activo' => 'Activo', 'Remarcado' => 'Remarcado', 'Cancelado' => 'Cancelado'), ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Gravar', ['class' => 'btn btn-primary']) !!}
</div>
