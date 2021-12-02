<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ParkirMasuk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == true)
			cek_user();
		else
			redirect('logout');
		$this->load->model('gate/Mentry');
		$this->load->model('gate/MlapParkirmasuk');
		$this->load->model('gate/MlapParkirKeluar');
		$this->load->model('gate/Mconfig');
	}
	public function index()
	{
		$strurl = $this->Mconfig->Apikey();
		$data = [
			'title' => 'laporan Kendaraan Masuk hari ini',
			'page'  => 'Laporan Parkir Masuk Hari ini',
			'pageSecond' => 'Laporan Sisa Kendaraan Parkir Masuk ',
			'small' => 'laporan Kasir Parkir',
			'secontitle' => 'Laporan Per Tanggal',
			'urls'  => '<li class="active">Parkir report</li>',
			'EntryGroubDay'  => $this->MlapParkirmasuk->getGroubOneDay(),
			'EntryGroubDaySisa'  => $this->MlapParkirmasuk->getGroubOneDaySisa(),
			
			'signatureKey'  => $strurl['value'],
		];
		$this->template->display('gate/parkirMasuklaporan/index', $data);
	}

	public function TabelPeriode()
	{
		$param = $this->input->post(null, TRUE);
		$data['MasukGroup'] = $this->MlapParkirmasuk->getGroub($param);

		$this->load->view('gate/parkirMasuklaporan/tabel', $data);
	}
}
