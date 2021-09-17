<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_data_mahasiswa extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model("m_mahasiswa");
	}


	public function index()
	{
		$data['record']= $this->m_mahasiswa->tampil_data();
		$this->load->view('v_data_mahasiswa',$data);
	}

	function input()
	{
		if(isset($_POST['submit'])){
			$this->m_mahasiswa->input_data();
			redirect('c_data_mahasiswa');
		}
		else{
			$this->load->view('v_input');
		}
	}

	function edit()
	{
		if(isset($_POST['submit'])){
			$this->m_mahasiswa->edit_data();
			redirect('c_data_mahasiswa');
		}
		else{
			$id = $this->uri->segment(3);
			$data['record']=$this->m_mahasiswa->ambil_data($id)->row_array();
			$this->load->view('v_edit',$data);
		}
	
	}
	function hapus(){
		$id = $this->uri->segment(3);
		$this->m_mahasiswa->hapus_data($id);
		redirect('c_data_mahasiswa');
	}
}
