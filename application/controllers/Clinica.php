<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clinica extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('clinicaModel');
    }


    public function index()
    {
        $data = array();

        $data['medical_appointments'] = $this->clinicaModel->listAppointments();

        $this->load->view('layouts/header');
        $this->load->view('clinica/home', $data);
        $this->load->view('layouts/footer');
    }


    function savePatient()
    {
        
        if ($_POST) {
            $this->clinicaModel->savePatients($_POST);
        }
        $this->load->view('layouts/header');
        $this->load->view('clinica/message');
        $this->load->view('layouts/footer');
    }

    function saveAppointment()
    {
        if ($_POST) {
            $this->clinicaModel->saveAppointments($_POST);
        }
        $this->load->view('layouts/header');
        $this->load->view('clinica/message');
        $this->load->view('layouts/footer');
    }


    function deleteAppointment($id)
    {
        
        $id=(isset($_GET['id']))? $_GET['id']+0:0;
        $data['medical_appointment'] = $this->clinicaModel->deleteAppointments($id);
        $this->load->view('layouts/header');
        $this->load->view('personas/message');
        $this->load->view('layouts/footer');
    }
    
}

/* End of file Clinica.php */
