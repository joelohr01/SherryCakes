<?php

class HomeController extends BaseController {

    public function showLogin() {
        return View::make('login');
    }

    public function doLogin() {
        // validate the info
        $rules = array(
            'username'    => 'required',
            'password' => 'required|alphaNum|min:3'
        );

        //run the validation
        $validator = Validator::make(Input::all(), $rules);

        //if validator fails redirect back to form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $userdata = array(
               'username' 	=> Input::get('username'),
               'password' 	=> Input::get('password')
            );

            //attempt to do the login
            if (Auth::attempt($userdata)) {
                echo 'Success!';
            } else {
                return Redirect::to('login');
            }
        }
    }

    public function doLogout() {
        Auth::logout();
        return Redirect::to('logout');
    }

}
