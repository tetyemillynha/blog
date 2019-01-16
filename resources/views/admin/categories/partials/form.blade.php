<div class="form-group">
    {{ Form::label('name', 'Nome da categoria: ') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'URL Amigável: ') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Descrição: ') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Salvar', ['class'=> 'btn btn-sm btn-primary']) }}
</div>