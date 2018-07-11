<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;


class TagsController extends Controller
{
    

public function index()
{
	$tags = Tag::orderBy('id', 'DESC')->paginate(5);
	return view('page.tag')->with('tags', $tags);
}
    

public function create()
{

	return view('page.tags');


}

public function store(TagRequest $request)
{

	$tags = new Tag($request->all());
	$tags->save();



	return redirect()->route('tags.index');

}

public function edit($id)

	{
		
		
	}

	public function update(Request $request, $id)
	{
		

	}

public function destroy($id)
	{

		$tags = Tag::find($id);
		$tags->delete();
		return view('page.tag')->with('tags', $tags);
		
}
	




    }


