<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

	public function index()
	{
		$user = User::orderBy('id', 'ASC')->paginate(5);
		return view('users.index')->with('users', $users);
	}

	public function create()
	{
		return view('auth.signin');
	}


	public function store(UserRequest $request)
	{

		$user = new User($request->all());
		$user->save();
		
	}

	public function edit($id)

	{
		$user =User::find($id);
		return view('page.edit')->with('user', $user);


	}

	public function update(Request $request, $id)
	{
		$user = User::find($id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->type = $request->type;
		$user->save();

		return redirect('page.list');

	}

	public function destroy($id)
	{

		$user = User::find($id);
		$user->delete();
	}
    
}
