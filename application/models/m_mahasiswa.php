<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mahasiswa extends CI_Model{

function tampil_data(){

	return $this->db->get('tbdatamhs');
}
	
function input_data(){
	$data=array(
		'nim'=> $this->input->post('nim'),
		'nama'=> $this->input->post('nama'),
		'jurusan'=> $this->input->post('jurusan'),
		'unit'=> $this->input->post('unit'),
		'alamat'=> $this->input->post('alamat'),
		'no_hp'=> $this->input->post('no_hape')
	);
	$this->db->insert('tbdatamhs',$data);
}

function edit_data()
{
	$data=array(
		'nim'=> $this->input->post('nim'),
		'nama'=> $this->input->post('nama'),
		'jurusan'=> $this->input->post('jurusan'),
		'unit'=> $this->input->post('unit'),
		'alamat'=> $this->input->post('alamat'),
		'no_hp'=> $this->input->post('no_hape')
	);
	$this->db->where('id_mhs', $this->input->post('id'));
	$this->db->update('tbdatamhs',$data);
}

function hapus_data($id){
	$this->db->where('id_mhs', $id);
	$this->db->delete('tbdatamhs');
}

function ambil_data($id){
	$param = array('id_mhs'=>$id);
	return $this->db->get_where('tbdatamhs',$param);
}

}
