<?php
class User_model extends CI_Model {

  function authenticate($user, $pass) {
		$pass = md5($pass);
    $query = $this->db->get_where('musicos',
      array('correo' => $user, 'password' => $pass));

	  return $query->result_object();
  }

  function save($user)
  {
		$user['password'] = md5($user['password']);
    $r = $this->db->insert('musicos', $user);
    return $r;
  }

  function all($busqueda)
  {

    $query = $this->db->get_where('musicos', array('instrumentos_toca' => $busqueda));
   //$query = $this->db->get('musicos');

    return $query->result_object();
    
  }

}