<?php

namespace App\Controllers;

class Bootstrap extends BaseController
{

    function index()
    {
        $this->load->view('v_bootstrap');
    }
}
