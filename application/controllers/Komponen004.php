<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komponen004 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MKomponen004');
	}

	public function index()
	{
		$data['komponen'] = $this->MKomponen004->getAllKomponen();
		$this->load->view('index', $data);
	}

	public function tambah()
	{
		$this->load->view('tambah');
	}

	public function simpan()
	{
		$this->MKomponen004->addKomponen();
		redirect('Komponen004');
	}

	public function hapus($id)
	{
		$this->MKomponen004->deleteKomponen($id);
		redirect('Komponen004');
	}

	public function ubah($id)
	{
		$data['komponen'] = $this->MKomponen004->getBarangById($id);
		$this->load->view('ubah', $data);
	}

	public function simpanUbah()
	{
		$this->MKomponen004->updateKomponen();
		redirect('Komponen004');
	}
}
