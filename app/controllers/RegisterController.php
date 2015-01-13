<?php

class RegisterController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		    $data =  Input::except(array('_token')) ;
            $rule  =  array(
                    'fname'       => 'required|users',
                    'lname'      => 'required|users',
                    'email'   => 'required|email|unique:users',
                    'password'  => 'required|min:10|same:cpassword',
                    'cpassword'  => 'required|min:10'
                ) ;

			$message = array(
			                   'cpassword.required' => 'The confirm password field is required.',
			                   'cpassword.min'      => 'The confirm password must be at least 10 characters',
			                   'password.same'      => 'The :attribute and confirm password field must match.',
			               );
 
            $validator = Validator::make($data,$rule,$message);
 
            if ($validator->fails())
            {
                    return Redirect::to('signup')
                            ->withErrors($validator->messages());
            }
            else
            {
                    Register::saveFormData(Input::except(array('_token','cpassword')));
 
                    return Redirect::to('signup')
                            ->withMessage('You have been Registered');
            }
	}


	/**
	 * Display the specified resource.
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


}
