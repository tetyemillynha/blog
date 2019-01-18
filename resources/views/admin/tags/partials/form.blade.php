<div class="form-group">
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    <p class="small text-danger">O nome é como aparece em seu site.</p>
</div>

<div class="form-group">
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
    <p class="small text-danger">O “slug” é uma versão amigável do URL. Normalmente, é todo em minúsculas e contém apenas letras, números e hífens.</p>
</div>

<div class="form-group">
    {{ Form::submit('Salvar', ['class'=> 'btn btn-success']) }}
</div>