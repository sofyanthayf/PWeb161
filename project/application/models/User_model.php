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

    public function namausersudahterdaftar( $namauser ){
        $query = $this->db->get_where( 'members', array( 'username' => $namauser) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }

    public function emailsudahterdaftar( $emailaddr ){
        $query = $this->db->get_where( 'members', array( 'email' => $emailaddr) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }

}


?>
