<?php

class ContactController extends BaseController {

	public function getContact(){

		return View::make('newBlog.contact');

	}

	public function getContactForm(){

		$data = Input::all();

		$rules = array (
			'name' => 'required',
			'email' => 'required',
			'phone' =>'required|min:10',
			'message' =>'required'
			);

		$validator = Validator::make($data, $rules);

		if($validator->passes()){
			Mail::send('emails.hello', $data, function($message) use ($data)
			{
				$message->from($data['email'], $data['name']);
				$message->to('a_falsario@yahoo.com', 'Ashley Falsario')->subject('contact request');
			});

			return View::make('newblog.contact');
		} else {
			return Redirect::back()->withErrors($validator);
		}
	}

}
