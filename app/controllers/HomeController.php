<?php

class HomeController extends BaseController {

    public function showLogin() {
        return View::make('login');
    }

    public function doLogin() {
        
    }

}
