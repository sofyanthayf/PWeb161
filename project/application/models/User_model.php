<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function registeruser(){
        $data = [
                    'id' => date('U'),
                    'email' => $this->input->post('email'),
                    'username' =>  $this->input->post('user'),
                    'namalengkap' =>  $this->input->post('nama'),
                    'password' =>  password_hash( $this->input->post('pass1'), PASSWORD_BCRYPT )
                ];

        $this->db->insert( 'members', $data );
    }

}


?>
