<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_alumni');
	}
	public function index()
	{
		$queryAllAlumni = $this->M_alumni->getDataAlumni();
		$DATA = array ('queryAllAlmn' => $queryAllAlumni);
		$this->load->view('V_home', $DATA);
	}
	public function add()
	{
		$this->load->view('V_add');
	}
	public function edit($nim)
	{
		$queryAlumniDetail = $this->M_alumni->getDataAlumniDetail($nim);
		$DATA = array('queryAlmDetail' => $queryAlumniDetail);
		$this->load->view('V_edit', $DATA);
	}
	public function detail($nim)
	{
		$queryDataDetail = $this->M_alumni->detailDataAlumni($nim);
		$DATA = array('queryDtDetail' => $queryDataDetail);
		$this->load->view('V_edit', $DATA);
	}
	public function form()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$konsentrasi = $this->input->post('konsentrasi');
		$tahun_masuk = $this->input->post('tahun_masuk');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$ipk = $this->input->post('ipk');
		$status_pekerjaan = $this->input->post('status_pekerjaan');

		$ArrInsert = array(
			'nama' => $nama,
			'nim' => $nim,
			'konsentrasi' => $konsentrasi,
			'tahun_masuk' => $tahun_masuk,
			'tahun_lulus' => $tahun_lulus,
			'ipk' => $ipk,
			'status_pekerjaan' => $status_pekerjaan
		);
		$this->M_alumni->insertDataAlumni($ArrInsert);
		redirect(base_url(''));
	}
	public function update()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$konsentrasi = $this->input->post('konsentrasi');
		$tahun_masuk = $this->input->post('tahun_masuk');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$ipk = $this->input->post('ipk');
		$status_pekerjaan = $this->input->post('status_pekerjaan');

		$ArrUpdate = array(
			'nama' => $nama,
			'konsentrasi' => $konsentrasi,
			'tahun_masuk' => $tahun_masuk,
			'tahun_lulus' => $tahun_lulus,
			'ipk' => $ipk,
			'status_pekerjaan' => $status_pekerjaan
		);
		$this->M_alumni->updateDataAlumni($nim, $ArrUpdate);
		redirect(base_url('')); 
	}
	public function delete($nim)
	{
		$this->M_alumni->deleteDataAlumni($nim);
		redirect(base_url(''));
	}
	
}
