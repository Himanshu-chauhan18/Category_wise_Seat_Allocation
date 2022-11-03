<?php


class Index extends Controller
{
   
    function __construct() {
            parent::__construct();	
    }

    function index()
    {
        if(Session::get('username'))
		{

			$this->view->render('login/show_page');
			
		}else{
			$this->view->render('login/login_page');
		} 
        
    }
}
