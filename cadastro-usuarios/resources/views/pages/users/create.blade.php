@extends('layouts.app')

@section('title', 'Cadastrar Novo Usuário')

@section('content')

<div class="card-body">
  <div class="card-header bg-transparent px-0">
     <div class="d-flex justify-content-between">
        <h3>Cadastrar usuário</h3>
     </div>
  </div>
  <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" class="form">
    @include('pages.users._partials.form')
  </form>
</div>

@endsection
    