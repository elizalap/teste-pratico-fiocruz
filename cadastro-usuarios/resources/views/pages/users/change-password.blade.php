@extends('layouts.app')
@section('title','Alterar senha')

@section('content')
<div class="card-body">
   <div class="card-header bg-transparent px-0">
      <div class="d-flex justify-content-between">
         <h3>Alterar senha</h3>
      </div>
   </div>
   <div class="col-12 mt-4">
    @include('includes.alerts')
    <form action="{{ route('users.update-password', $user->id) }}" method="POST">
        @csrf

        <div class="row mb-2">
            <div class="input-group mb-2">
                <label for="current_password" class="col-2">Senha Atual</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="input-group mb-2">
                <label for="new_password" class="col-2">Nova Senha</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="input-group mb-2">
                <label for="new_password_confirmation" class="col-2">Confirmar Nova Senha</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
            </div>
        </div>
        

        <div class="row mt-3" style="text-align-last: justify;">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Alterar Senha</button>
                <a href="{{route('users.index')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
   </div>
</div>

@endsection