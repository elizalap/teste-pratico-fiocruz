@extends('layouts.app')

@section('title', "Editar Usuário")

@section('content')
<div class="card-body">
   <div class="card-header bg-transparent px-0">
      <div class="d-flex justify-content-between">
         <h3>Editar {{ $user->name }}</h3>
      </div>
   </div>
   <form action="{{ route('users.update', $user->id) }}" method="post">
      @method('PUT')
      @include('pages.users._partials.form')
   </form>
 </div>
 @endsection