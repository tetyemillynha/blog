
{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id', 'Todas as categorias ') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Digite o título aqui ') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'Slug (Link permanente) ') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
        {{ Form::label('file', 'Imagem: ') }}
        {{ Form::file('file') }}
</div>

<div class="form-group">
        {{ Form::label('slug', 'Status ') }}
       <label>
            {{ Form::radio('status', 'PUBLISHED') }} PUBLICADO
       </label>
       <label>
            {{ Form::radio('status', 'DRAFT') }} RASCUNHO
       </label>
</div>

<div class="form-group">
        {{ Form::label('tags', 'Tags ') }}
       
        <div>
            @foreach ($tags as $tag)
                <label>
                    {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
               </label>
            @endforeach
       </div>
</div>

<div class="form-group">
        {{ Form::label('execerpt', 'Resumo ') }}
        {{ Form::textarea('execerpt', null, ['class' => 'form-control', 'rows'=> '2']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Descrição ') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Salvar', ['class'=> 'btn btn-success']) }}
</div>