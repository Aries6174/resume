<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        $data = [
            'name' => 'John Doe',
            'title' => 'Software Developer',
            'skills' => ['PHP', 'JavaScript', 'Python']
        ];
        
        return view('test', $data);
    }
}
