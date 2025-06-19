<?php

namespace App\Controllers;

class Experience extends BaseController
{
    protected $experienceModel;

    public function __construct()
    {
        $this->experienceModel = model('ExperienceModel');
    }

    public function index()
    {
        $data['experiences'] = $this->experienceModel->findAll();
        return view('admin/experience/list', $data);
    }

    public function new()
    {
        return view('admin/experience/form');
    }

    public function create()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'company' => $this->request->getPost('company'),
            'period' => $this->request->getPost('period'),
            'description' => $this->request->getPost('description'),
            'details' => $this->request->getPost('details')
        ];

        $this->experienceModel->insert($data);
        return redirect()->to('/experience')->with('success', 'Experience added successfully');
    }

    public function edit($id)
    {
        $data['experience'] = $this->experienceModel->find($id);
        return view('admin/experience/form', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'company' => $this->request->getPost('company'),
            'period' => $this->request->getPost('period'),
            'description' => $this->request->getPost('description'),
            'details' => $this->request->getPost('details')
        ];

        $this->experienceModel->update($id, $data);
        return redirect()->to('/experience')->with('success', 'Experience updated successfully');
    }

    public function delete($id)
    {
        $this->experienceModel->delete($id);
        return redirect()->to('/experience')->with('success', 'Experience deleted successfully');
    }

    public function manage()
    {
        $data['experiences'] = $this->experienceModel->findAll();
        
        return view('templates/header')
            . view('admin/experience/manage', $data)
            . view('templates/footer');
    }
}
