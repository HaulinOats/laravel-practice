<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "hello";
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		//Check if user is logged in, otherwise, redirect back to login
		if (Auth::check())
		{
		    $user = User::find($id);
			$images = $user->images;
			return View::make('users.show')->with('user', $user)->with('images', $images);
		} else {
			Notification::error("Need to login first");
			return Redirect::to('/login');
		}
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function imageUpload()
	{
		if (Input::hasFile('image'))
		{
		    $file = Input::file('image');
		    $user = User::find(Input::get('user_id'));
		    $image_path = 'public/users/'.$user->id;
		    $file->move($image_path, $file->getClientOriginalName());
		    $image = new Image;
		    $image->user_id = $user->id;
		    $image->url = "/users/".$user->id."/".$file->getClientOriginalName();
		    $image->save();
		    return Redirect::back();
		}
	}

	public function imageDelete($id)
	{
		$image = Image::find($id);
		$image->delete();
		return Redirect::back();
	}

}