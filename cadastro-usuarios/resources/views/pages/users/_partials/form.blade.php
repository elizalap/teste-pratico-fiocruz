@include('includes.alerts')
@csrf
<div class="form-group mt-4">
    <div class="row mb-2">
      <label  class="col-2">Nome</label>
      <div class="col-10">
        <div class="input-group mb-2">
          <input type="text" name="name" class="form-control" value="{{ $user->name ?? old('name') }}" placeholder="Nome">
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <label  class="col-2">Email</label>
      <div class="col-10">
        <div class="input-group mb-2">
          <span class="input-group-text">@</span>
          <input type="text" name="email" class="form-control" value="{{ $user->email ?? old('email') }}" placeholder="E-mail" >
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <label  class="col-2">Senha</label>
      <div class="col-10">
        <div class="input-group mb-2">
          <input type="password" class="form-control" name="{{isset($user) ? 'current_password' : 'password'}}">
        </div>
      </div>
    </div>

    @if(!isset($user->id))
      <div class="row mb-2">
        <label  class="col-2">Confirmar senha</label>
        <div class="col-10">
          <div class="input-group mb-2">
            <input type="password" class="form-control" name="password_confirmation">
          </div>
        </div>
      </div>
    @endif

    <div class="row mb-2">
      <label  class="col-2">Perfil</label>
      <div class="d-flex col-6">
        <div class="input-group mb-2">
          <div class="col-sm-1 mr-3">
            <input type="radio" class="form-check-input" id="profile-adm" name="profile" value="Administrador"
            {{ old('profile') == 'Administrador' ? 'checked' : '' }} 
            {{ isset($user) ? ($user->profile == 'Administrador' ? 'checked' : '') : 'checked' }}>
          </div>
          <div class="col-6">
            <label for="profile-adm">Administrador</label>
          </div>
        </div>
        <div class="input-group mb-2">
          <div class="col-1 mr-3">
            <input type="radio" class="form-check-input" id="profile-guest" name="profile" value="Convidado"
            {{ old('profile') == 'Convidado' ? 'checked' : '' }} 
            {{ isset($user) ? ($user->profile == 'Convidado' ? 'checked' : '') : '' }}>
          </div>
          <div class="col-6">
            <label for="profile-guest">Convidado</label>
          </div>
        </div>
      </div>
    </div> 
  
    @if(isset($user->id))
    <div class="row mt-3" style="text-align-last: justify;">
      <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Salvar Alterações</button>
          <a href="{{route('users.index')}}" class="btn btn-danger">Cancelar</a>
      </div>
    </div>

    @else
    <div class="row mt-3" style="text-align-last: justify;">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="{{route('users.index')}}" class="btn btn-danger">Cancelar</a>
      </div>
    </div>
  @endif
</div>