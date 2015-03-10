<?php

class InventoryController extends \BaseController {

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
			//$confirmation_code = str_random(30);
		    $data =  Input::except(array('_token')) ;
            $rule  =  array(
                    'prodId'       => 'required',
                    'pname'      => 'required',
                    'descr'      => 'required',
                    'location'   => 'required',
                    'price'      => 'required',
                    'pvat'      => 'required',
                    'sales'      => 'required',
                    'svat'      => 'required',
                    'quantity'      => 'required',
                    'swarn'      => 'required'
                ) ;

			/*$message = array(
			                   'prodId.required' => 'Product Must Have a Serial Number',
			                   'pname.required' => 'Product Name Required',
			                   'descr.required' => 'Brief Short Product Description',
			                   'price.required' => 'Enter Product price',
			                   'pvat.required' => 'VAT for Price',
			                   'sales.required' => 'Sales Price Required',
			                   'svat.required' => 'VAT for sales',
			                   'quantity.required' => 'Must enter quantity of stock',
			                   'swarn.required' => 'Reorder level',
			               );*/

 
            $validator = Validator::make($data,$rule);

	        if($validator->fails())
	        {
	            return Redirect::back()->withInput()->withErrors($validator);
	        }
	        
	        else
	        {
			    $newproduct = new Products;
			    $newproduct->prodId = Input::get('prodId');
			    $newproduct->pname = Input::get('pname');
			    $newproduct->descr = Input::get('descr');
			    $newproduct->location = Input::get('location');
			    $newproduct->purl = Input::get('purl');
			    $newproduct->price = Input::get('price');
			    $newproduct->pvat = Input::get('pvat');
			    $newproduct->sales = Input::get('sales');
			    $newproduct->svat = Input::get('svat');
			    $newproduct->quantity = Input::get('quantity');
			    $newproduct->swarn = Input::get('swarn');
			    $newproduct->save();
			 
			    return Redirect::to('/back_end/addProduct')->with('success', true)
                    		->with('message','Product Added Successfully');
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
