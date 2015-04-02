<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return Artist::all();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$name = $request->input('name');
		return Artist::create(['name' => $name]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$artist = Artist::find($id);
		if ($artist == null) {
			return response("No artist found", 500);
		} else {
			return response($artist,200);
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$artist = Artist::find($id);
		if ($artist == null) {
			return response("No artist found", 500);
		}
		$name = $request->input('name');
		$artist->name = $name;
		$artist->save();
		return response($artist, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Artist::destroy($id);
	}

}
