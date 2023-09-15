<?php

namespace App\Controllers;

use App\Models\BlogModel;
class Pages extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['news'] = $model->getPosts();
        
        echo view('templates/header', $data);
        echo view('Pages/home');
        echo view('templates/footer');
    }

    function showme($page = 'home'){
        if( !is_file(APPPATH.'/Views/Pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        echo view('templates/header');
        echo view('Pages/'.$page);
        echo view('templates/footer');

    }
}