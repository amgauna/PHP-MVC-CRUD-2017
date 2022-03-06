@extends('layout.app')
@section('title', 'Registro')
 
@section('content')
<h1>Registro</h1>

<hr>

{!! Form::open(['method' => get, 'route' => 'customers.index, 'class' => 'form-horizontal']) !!}
 
    <div class="form-row form-group">
 
 
        {!! Form::label('search', 'Procurar por', ['class' => 'col-sm-2 col-form-label text-right']) !!}
 
 
        <div class="col-sm-8">
 
      {!! Form::text('search', isset($search) ? $search : null, ['class' => 'form-control']) !!}
 
        </div>
        <div class="col-sm-2">
 
      {!! Form::submit('procurar', ['class'=>'btn btn-primary']) !!}
 
        </div>
 
    </div>
 
{!! Form::close() !!}


<div class="container">
 
 
    @if(isset($customer))
 
        {!! Form::model($customer, ['method' => 'put', 'route' => ['customers.update', $customer->id ], 'class' => 'form-horizontal']) !!}
 
    @else
 
        {!! Form::open(['method' => 'post','route' => 'customers.store', 'class' => 'form-horizontal']) !!}
 
    @endif
 
    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($customer))
        Editando registro #{{ $customer->id }}
          @else
        Criando novo registro
          @endif
      </span>
        </div>
        <div class="card-body">
      <div class="form-row form-group">
 
          {!! Form::label('first_name', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Defina o nome']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('last_name', 'Sobreome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Defina o sobrenome']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('email', 'E-mail', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-8">
 
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Defina o email']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('phone', 'Telefone', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Defina o telefone']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('address', 'Endereço', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-10">
 
        {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder'=>'Defina o endereço completo']) !!}
 
          </div>
 
      </div>
        </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit(  isset($customer) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}
 
        </div>
    </div>
 
    {!! Form::close() !!}
 
</div>

{{ $customers->links() }}

@endsection
