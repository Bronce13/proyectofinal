<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Tag;
use App\Articulo;

class ArticulosController extends Controller
{
    public function index()
{
	$articulos = Articulo::orderBy('id', 'DESC')->paginate(5);
	return view('page.articulos')->with('articulos', $articulos);
}
    

public function create()
{

	$categorias = Categoria::orderBy('name', 'ASC')->lists('name', 'id');
	$tags = Tag::orderBy('name', 'ASC')->lists('name', 'id');
	return view('page.articulos')
	->with('categorias', $categorias)
	->with('tags', $tags);


}

public function store(TagRequest $request)
{

	$articulos = new Articulo($request->all());
	$articulos->user_id = \Auth::user()->name;
	$articulos->save();

	$articulos->tags()->sync();



	return redirect()->route('articulos.index');

}

public function edit($id)

	{
		
		
	}

	public function update(Request $request, $id)
	{
		

	}

public function destroy($id)
	{

		
		
}
	


}
