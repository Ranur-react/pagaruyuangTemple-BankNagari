<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ParkirKeluar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == true)
			cek_user();
		else
			redirect('logout');
		$this->load->model('gate/Mentry');
		$this->load->model('gate/MlapParkirKeluar');
		$this->load->model('gate/Mconfig');
	}
	public function index()
	{
		$strurl = $this->Mconfig->Apikey();
		$data = [
			'title' => 'laporan Parkir Keluar hari ini',
			'page'  => 'Laporan Parkir Hari ini',
			'small' => 'laporan Kasir Parkir',
			'secontitle'=> 'Laporan Per Tanggal',
			'urls'  => '<li class="active">Parkir report</li>',
			'entry'  => $this->Mentry->getall(),
			'exitoneday'  => $this->MlapParkirKeluar->getallOneDay(),
			'exitGroubDay'  => $this->MlapParkirKeluar->getGroubOneDay(),
			'signatureKey'  => $strurl['value'],
		];
		$this->template->display('gate/parkirlaporan/index', $data);
	}

	public function TabelPeriode()
	{
		$param = $this->input->post(null, TRUE);
		$data['$exitGroup'] = $this->MlapParkirKeluar->getGroub($param);

		$this->load->view('Absens/parkirlaporan/tabel', $data);
	}
	
}
