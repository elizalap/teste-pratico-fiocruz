<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(6);
        return view('pages.users.index', compact('users'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:40',
            'email' => 'required|string|email|max:40|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'profile' => 'required|in:Administrador,Convidado',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->profile = $request->profile;
        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:40',
            'email' => 'required|string|email|max:40|unique:users,email,' . $id,
            'current_password' => 'required|string',
            'profile' => 'required|in:Administrador,Convidado',
        ]);

        $user = User::find($id);
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'A senha atual está incorreta.']);
        }
        
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuário excluído com sucesso!');
    }

    public function showChangePasswordForm($id)
    {
        $user = User::find($id);
        return view('pages.users.change-password', compact('user'));
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'A senha atual está incorreta']);
        }

        $user->password = Hash::make($request->new_password);
        $user->update();

        return redirect()->route('users.show', $user->id)->with('success', 'Senha alterada com sucesso!');
    }
}