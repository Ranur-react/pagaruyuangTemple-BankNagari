
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ExitMotor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		 // $d['data']="bisa";
		// echo json_encode($d) ;
			// redirect('http://192.168.137.1/EXITMotor/');
		$this->Write();
	}
	public function Write()
		{
			$command='TRIG1';
			// $qry = mysqli_fetch_array(mysqli_query($conn,"SELECT*FROM `tb_config` WHERE `tb_config`.key='04' AND  OPTIONS='board' ;"));
			$qry=$this->db->query("SELECT*FROM `tb_config` WHERE `tb_config`.key='04' AND  OPTIONS='board' ;")->row_array();;

			//Koneksi Hardware
			$connfig['host']=$qry['value'];
			$connfig['port']=5004;
			$connfig['socket']=socket_create(AF_INET, SOCK_STREAM, 0);
			socket_connect($connfig['socket'], $connfig['host'],$connfig['port']);
			$msg=chr(0xA6).$command.chr(0xA9) ;
			socket_write($connfig['socket'], $msg,strlen($msg));
			# code...
		}
	
}
