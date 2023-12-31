<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
   
    public function edit($id){
        $model = new BlogModel();
        $data['post'] = $model->find($id);
        echo view('templates/header');
        echo view('blog/edit', $data);
        echo view('templates/footer');    
    }

    function update($id){
        $model = new BlogModel();
        $model->find($id);

        $data=
            [
                'title' => $this->request->getPost('title'),
                'body' => $this->request->getPost('body'),
                'slug' => url_title($this->request->getPost('title')),
            ];
            $model->update($id, $data);
        }
        
        function delete($id){
            $model = new BlogModel();
            $sql = "DELETE FROM post WHERE id = ?";
            $model->query($sql, [$id]);
        }
    function post($slug){
        $model = new BlogModel();

        $data['post'] = $model->getPosts($slug);


        echo view('templates/header', $data);
        echo view('blog/post');
        echo view('templates/footer');

    }

    function create(){
        helper('form');
        $model = new BlogModel();

        if(! $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required' 
        ])){
            echo view('templates/header');
            echo view('blog/create');
            echo view('templates/footer');
        }else{
            $model->save(
                [
                    'title' => $this->request->getVar('title'),
                    'body' => $this->request->getVar('body'),
                    'slug' => url_title($this->request->getVar('title')),
                ]
            );

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'New post was created!');
            return redirect()->to('/');
        }
    }

    
}