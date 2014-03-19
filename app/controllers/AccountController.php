<?php

class AccountController extends BaseController {

	public function getRegister() {
		return View::make('account.register');
	}

	public function postRegister() {
		$validator = Validator::make(Input::all(),
			array(
				'username'		=> 'required|min:3|max:20|unique:users',
				'email'			=> 'required|min:3|max:50|unique:users',
				'password'		=> 'required|min:6',
				're_password'	=> 'required|same:password'
			)
		);

		if ($validator->fails()) {
			die('Failed!');
		} else {
			// Create account
			$user = User::create(array(
				'username'	=> Input::get('username'),
				'email'		=> Input::get('email'),
				'password'	=> Hash::make(Input::get('password'))
			));

			return Redirect::intended('/');
		}
	}
}