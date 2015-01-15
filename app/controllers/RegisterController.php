<?php

class RegisterController extends \BaseController {

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
			$confirmation_code = str_random(30);
		    $data =  Input::except(array('_token')) ;
            $rule  =  array(
                    'fname'       => 'required',
                    'lname'      => 'required',
                    'email'   => 'required|email|unique:users',
                    'password'  => 'required|min:5|same:cpassword',
                    'cpassword'  => 'required|min:5'
                ) ;

			$message = array(
			                   'cpassword.required' => 'The confirm password field is required.',
			                   'cpassword.min'      => 'The confirm password must be at least 10 characters',
			                   'password.same'      => 'The :attribute and confirm password field must match.',
			               );

 
            $validator = Validator::make($data,$rule,$message);

	        if($validator->fails())
	        {
	            return Redirect::back()->withInput()->withErrors($validator);
	        }
	        
	        else
	        {
			    $user = new User;
			    $user->fname = Input::get('fname');
			    $user->lname = Input::get('lname');
			    $user->email = Input::get('email');
			    $user->password = Hash::make(Input::get('password'));
			    $user->cpassword = Hash::make(Input::get('cpassword'));
			    $user->confirmation_code = $confirmation_code;
			    $user->save();
			 
			    Mail::send('mails.verify', array('fname' => Input::get('fname')), 
			    function($message)
				{
				    $message->from('ims-soft@gmail.com', 'IMS Soft400');

				    $message->to(Input::get('email'));

				    $message->subject('Thanks for creating an account to IMS Soft400');
				});
			 
			    return Redirect::to('login')->with('success', true)
                    		->with('message','Go to your email and verity account');
				        }
	   	 }
 

	public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Flash::message('You have successfully verified your account.');

        return Redirect::to('login');
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
