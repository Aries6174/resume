<?php

namespace App\Controllers;

class DataController extends BaseController
{
    protected $jsonPath;

    public function __construct()
    {
        $this->jsonPath = WRITEPATH . 'data/db.json';
        
        // Create directory if it doesn't exist
        if (!is_dir(dirname($this->jsonPath))) {
            mkdir(dirname($this->jsonPath), 0777, true);
        }
        
        // Create file if it doesn't exist
        if (!file_exists($this->jsonPath)) {
            $initialData = [
                'contact' => [
                    'phone' => '',
                    'email' => '',
                    'github' => '',
                    'linkedin' => '',
                    'facebook' => '',
                    'address' => ''
                ]
            ];
            file_put_contents($this->jsonPath, json_encode($initialData, JSON_PRETTY_PRINT));
            chmod($this->jsonPath, 0777);
        }
    }

    public function getData()
    {
        try {
            if (!is_readable($this->jsonPath)) {
                throw new \Exception('Database file is not readable');
            }
            $data = json_decode(file_get_contents($this->jsonPath), true);
            return $this->response->setJSON($data);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
    }

    public function updateSection()
    {
        try {
            if (!is_writable($this->jsonPath)) {
                throw new \Exception('Database file is not writable');
            }

            $data = $this->request->getJSON(true);
            if (!isset($data['section']) || !isset($data['data'])) {
                throw new \Exception('Invalid data format');
            }

            $currentData = json_decode(file_get_contents($this->jsonPath), true) ?? [];
            $currentData[$data['section']] = $data['data'];
            
            if (!file_put_contents($this->jsonPath, json_encode($currentData, JSON_PRETTY_PRINT))) {
                throw new \Exception('Failed to write data');
            }

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Data updated successfully'
            ]);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON([
                'success' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
    }
}
