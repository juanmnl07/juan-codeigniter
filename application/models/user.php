<?php
class User extends CI_Model {

    var $first_name   = '';
    var $last_name = '';
    var $email    = '';
    var $password    = '';
    var $permission    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    /** VALIDATE */

    function validateUser($email='', $password='')
    {
        $query = $this->db->get_where('user', array('email' => $email,'password' => $password));
        $query_result = $query->num_rows();

        if ($query_result > 0) {
            return true;
        } else {
            return false;
        }
    }

    /** INSERT */

    function insert($data=array())
    {
        $this->db->insert('user', $this);
    }

    /** UPDATE */

    function update($email='',$data=array())
    {
        $this->db->update('user', $this, array('email' => $email));
    }

    /** GET */

    function getUsers(){

        $this->db->select('last_name, first_name, permission, email');
        $query = $this->db->get('user');
        $query_result = $query->result();

        return $query_result;

    }

}