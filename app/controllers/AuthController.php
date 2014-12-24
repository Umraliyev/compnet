<?php

class AuthController extends BaseController {

	public function getCreateAccount()
	{
		return View::make('auth.create-account');
	}

	public function postCreateAccount()
	{
		$validator = Validator::make(Input::all(), [
			'email' 	=> 'required|max:50|email|unique:users',
			'password'	=> 'required|min:6',
		]);

		if ($validator->fails())
		{
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}
		else
		{
			$email 		= Input::get('email');
			$password 	= Input::get('password');

			$user = User::create([
				'email'		=> $email,
				'password'	=> Hash::make($password)
			]);

			if ($user)
			{
				return Redirect::route('sign-in')->with('global', 'Аккаунт создан.');
			}
		}
	}

	public function getSignIn()
	{
		return View::make('auth.sign-in');
	}

	public function postSignIn()
	{
		$validator = Validator::make(Input::all(), [
			'email' => 'required|email',
			'password' => 'required'
		]);

		if ($validator->fails())
		{
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}
		else
		{
			$remember = (Input::has('remember')) ? TRUE : FALSE;

			if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')], $remember))
			{
				return Redirect::route('admin.pages.index');
			}
			else
			{
				return Redirect::back()->with('global', 'Неверный Email или пароль.');
			}
		}

		return Redirect::back()->with('global', 'There was a problem signing you in.');
	}

	public function getSignOut()
	{
		Auth::logout();

		return Redirect::route('index');
	}
}