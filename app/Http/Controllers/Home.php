<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of Home
 *
 * @author Aleksandar
 */
class Home {
    private $data = array();
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load_view('home', $this->data);
    }
}
