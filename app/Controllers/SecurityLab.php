<?php

namespace App\Controllers;

class SecurityLab extends BaseController
{
    public function index()
    {
        $data = [];
        
        // Check if the form was submitted
        if ($this->request->is('post')) {
            // Grab the input from the form
            $data['user_input'] = $this->request->getPost('user_input');
        }
        
        // Load the view and pass the data
        return view('lab_view', $data);
    }
}