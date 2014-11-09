<?php

class ProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /project
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('projects.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /project/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /project
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
        $rules = array(
          'projectname' => 'required',
          'email'      => 'required|email'
        );
        $validator = Validator::make(Input::all(), $rules);

        //process the login
        if($validator->fails()) {
            return Redirect::to('projects/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            //store
            $project = new Project;
            $project->projectname = Input::get('projectname');
            $project->customername = Input::get('customername');
            $project->customeraddress = Input::get('address');
            $project->customercity = Input::get('city');
            $project->customerstate = Input::get('state');
            $project->customerzip = Input::get('zip');
            $project->customeremail = Input::get('email');
            $project->customerphone = Input::get('phone');
        }

        //redirect
        Session::flash('message', 'Successfully created new Project');
        return Redirect::to('projects');
	}

	/**
	 * Display the specified resource.
	 * GET /project/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /project/{id}/edit
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
	 * PUT /project/{id}
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
	 * DELETE /project/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}