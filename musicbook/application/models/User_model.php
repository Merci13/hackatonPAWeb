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
    $sql = "SELECT nombre_completo FROM musicos WHERE  generos_gusta = ? OR nombre_completo = ?";
  $this->db->query($sql, array($busqueda, $busqueda));

    return $query->result_object();
  }

}