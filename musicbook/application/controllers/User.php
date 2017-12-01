<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
    function home(){

        $this->load->view('user/home');
    }



   public function index(){

        $this->load->view('user/home');
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function register()
    {
        $this->load->view('user/register');
	}
	
	public function authenticate() {

		$correo = $this->input->post('correo');
		$password = $this->input->post('password');
		$r = $this->User_model->authenticate($correo, $password);
		if (count($r) > 0 ) {
			$user = $r[0];
			redirect('home');
		} else {
			echo "Invalid user name or password";
		}
	}

	public function list() {
       $busqueda=$this->input->post('busqueda');
       $users = $this->User_model->all($busqueda);

        
        $data['musicos'] = $users;
        $data['title'] = 'List of Users';
        
        $this->load->view('user/list', $data);

	}



    public function save()
    {
		// get the params
        $nombre_completo = $this->input->post('nombre_completo');
        $difreccion = $this->input->post('difreccion');
        $instrumentos_toca = $this->input->post('instrumentos_toca');
        $generos_gusta = $this->input->post('generos_gusta');
        $foto_perfil = $this->input->post('foto_perfil');
        $correo = $this->input->post('correo');
        $password = $this->input->post('password');


		$user = array(
            'nombre_completo' => $nombre_completo,
            'difreccion' => $difreccion,
            'instrumentos_toca' => $instrumentos_toca,
            'generos_gusta' => $generos_gusta,
            'foto_perfil' => $foto_perfil,
            'correo' => $correo,
            'password' => $password

        );
		// call the model to save
		$r = $this->User_model->save($user);
		
		// redirect
        if ($r) {
            // $this->session->set_flashdata('message', 'User saved');
            redirect('login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('user/register');
        }
    }
}
