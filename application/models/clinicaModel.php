<?php

class clinicaModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    ///metodo para inserta a tabla patients
    public function savePatients($patients)
    {
        $this->db->insert('patients', $patients);
    }

    //metodo para inserta a tabla  medical_appointments
    public function saveAppointments($medical_appointment)
    {
        $id =$medical_appointment['id'];
        if($id+0>0){
            $this->db->where('id=', $id);
            unset( $medical_appointment['id']);
            $this->db->update('medical_appointments' , $medical_appointment);
        }else{
            $this->db->insert('medical_appointments', $medical_appointment);
        }
    }

    function listAppointments()
    {
        $query = $this->db->get('medical_appointments');
        return $query->result();
    }

    
    function loadAppointments($id)
    {
        $medical_appointment = new stdClass();
        $medical_appointment->id = 0;
        $medical_appointment->date = "";
        $medical_appointment->document_patient = "";

        $query = $this->db->where("id=", $id);
        $query = $this->db->get('medical_appointments');

        $result = $query->result();

        if (count($result)>0) 
        {
            $medical_appointment = $result[0];
        }
        return $medical_appointment;
    }

    function deleteAppointments($id)
    {
        $this->db->where("id=", $id);
        $this->db->delete('medical_appointments');
    }
}
