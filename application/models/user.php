<?php
class User extends CI_Model {

    var $first_name   = '';
    var $last_name = '';
    var $email    = '';
    var $password    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    /** GET: USER */

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

    /** INSERT: USER */

    function insert($data=array())
    {
        $this->db->insert('user', $this);
    }

    /** UPDATE: USER */

    function update($email='',$data=array())
    {
        $this->db->update('user', $this, array('email' => $email));
    }

}