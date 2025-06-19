<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'name' => 'ADRIAN JOEL JASPA',
            'phone' => '09063491020',
            'email' => 'Joel.Adrian6174@gmail.com',
            'github' => 'https://github.com/Aries6174',
            'address' => 'Elvicor Bldg. Tacas, Jaro, Iloilo City',
            'profile' => 'I am a 22-year-old student at the University of the Philippines Visayas, born in Iloilo, Philippines. Throughout my academic journey, I have maintained excellence, earning honors in both high school and senior high school. With a strong foundation in Computer Science, I am passionate about web development and software engineering. I strive for continuous growth and aim to make meaningful contributions through innovative solutions.',
            'education' => [
                [
                    'degree' => 'BS in Computer Science',
                    'school' => 'University of the Philippines Visayas',
                    'period' => '2021 - Present'
                ],
                [
                    'degree' => 'Senior High School', // Changed from High School
                    'school' => 'University of the East Manila',
                    'period' => '2019-2021',
                    'honors' => 'With Honors'
                ],
                [
                    'degree' => 'High School',
                    'school' => 'Marikina Catholic School',
                    'period' => '2017-2019',
                    'honors' => 'With High Honors'
                ]
            ],
            'experience' => [
                [
                    'title' => 'Scrum Master / Project Manager / Front End Developer',
                    'company' => 'Balay Balayan',
                    'period' => '2023 - 2024',
                    'description' => 'Dormitory Management System for the Local Area.',
                    'details' => 'Manage website design, content, and SEO Marketing, Branding and Logo Design'
                ],
                [
                    'title' => 'Back End Developer',
                    'company' => 'LibraRead',
                    'period' => '2022- 2023', 
                    'description' => 'Library Database Management System.',
                    'details' => 'Managed the contents, database, SQL, and a bit of designing.'
                ],
                [
                    'title' => 'Front and Back End Developer',
                    'company' => 'Animal Rescue Website',
                    'period' => '2022- 2023',
                    'description' => 'Website Project made by a three man team',
                    'details' => 'Managed both the PHP and SQL for the website.'
                ]
            ],
            'expertise' => ['Front-end', 'Back-end Developer', 'Documentation'],
            'languages' => ['English', 'Filipino', 'Hiligaynon'],
            'references' => [
                [
                    'name' => 'Milyn C Leghid',
                    'title' => 'Instructor, University of the Philippines Visayas',
                    'contact' => 'mcleghid@up.edu.ph | 09985782648'
                ],
                [
                    'name' => 'Jayvee Castañeda',
                    'title' => 'Instructor, University of the Philippines Visayas', 
                    'contact' => 'jbcastaneda@up.edu.ph | 09981982882'
                ]
            ]
        ];
        
        return view('templates/header', $data)
            . view('resume', $data)
            . view('templates/footer');
    }

    public function edit()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('templates/header', $this->data)
             . view('resume_edit', $this->data)
             . view('templates/footer');
    }

    public function update()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $model = model('ResumeModel');

        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'), 
            'email' => $this->request->getPost('email'),
            'github' => $this->request->getPost('github'),
            'address' => $this->request->getPost('address'),
            'profile' => $this->request->getPost('profile')
        ];

        if ($model->updateResume(1, $data)) {
            session()->setFlashdata('success', 'Resume updated successfully');
        } else {
            session()->setFlashdata('error', 'Error updating resume');
        }

        return redirect()->to('/edit');
    }
}
