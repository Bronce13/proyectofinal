<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests\CategoryRequest;



class CategoriasController extends Controller
{


public function index()
{
	$categorias = Categoria::orderBy('id', 'DESC')->paginate(5);
	return view('page.sucess')->with('categorias', $categorias);
}
    

public function create()
{

	return view('page.categorias');


}

public function store(CategoryRequest $request)
{

	$categorias = new Categoria($request->all());
	$categorias->save();



	return redirect()->route('categorias.index');

}

public function edit($id)

	{
		
	}

	public function update(Request $request, $id)
	{
		
	}

public function destroy($id)
	{

		$categorias = Categoria::find($id);
		$categorias->delete();
		return view('page.sucess')->with('categorias', $categorias);
}
	




    }
