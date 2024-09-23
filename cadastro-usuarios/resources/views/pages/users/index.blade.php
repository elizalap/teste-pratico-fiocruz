@extends('layouts.app')
@section('title','Gestão de Usuários')

@section('content')

<div class="card-body">
   <div class="card-header bg-transparent px-0">
      <div class="d-flex justify-content-between">
         <h3>Usuários</h3>
         <div class="text-right">
            <a href="{{route('users.create')}}" class="btn btn-success mb-2 me-2">
               Cadastrar
            </a>
         </div>
      </div>
   </div>
   <table class="table table-striped">
      <thead>
         <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Perfil</th>
            <th width="100"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($users as $user)
            <tr>
               <td>
                  <a href="{{route('users.show', $user->id)}}" target="_blank">
                     {{ $user->name }}
                  </a>
               </td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->profile }}</td>
               <td width="200" class="d-flex justify-content-around">
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="fa fa-pencil pull-left mr-4"></i>Edit</a>
                  <form action="{{ route('users.destroy', $user->id) }}" method="post">
                     @csrf
                     @method('DELETE')
                     <button type="submit" onclick="return confirm('Deseja realmente excluir o registro?')" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
   <div class="pagination">
      {!! $users->links('pagination::bootstrap-4') !!}
   </div>
</div>


@endsection