@extends('layouts.app')
@section('title','Detalhes do usuário')

@section('content')
<div class="card-body">
   <div class="card-header bg-transparent px-0">
      <div class="d-flex justify-content-between">
         <h3>{{$user->name}}</h3>
         <div class="text-right">
            <a href="{{route('users.change-password', $user->id)}}" class="btn btn-primary mb-2 me-2">
               Alterar senha
            </a>
         </div>
      </div>
   </div>
   <div class="col-12 mt-4">
      <p><strong>Nome:</strong> {{ $user->name }}</p>
      <p><strong>E-mail:</strong> {{ $user->email }}</p>
      <p><strong>Perfil:</strong> {{ $user->profile }}</p>
   </div>
   <div class="col-md-12 text-end">
      <a href="{{route('users.index')}}" class="btn btn-danger">Voltar</a>
   </div>
   
</div>

@endsection