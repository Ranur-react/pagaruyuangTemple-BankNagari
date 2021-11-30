<?php
class MlapParkirKeluar extends CI_Model
{
	public function getallOneDay()
	{
		$dateNow= date("d");
		$montNow= date("m");
		$yearNow= date("y");
		// return $this->db->query("SELECT * FROM tb_exit WHERE DAY(date_exit)='$dateNow' AND MONTH(date_exit)='$montNow' AND YEAR(date_exit)='$yearNow';")->result_array();
		return $this->db->query("SELECT * FROM tb_exit WHERE DAY(date_exit)='29' AND MONTH(date_exit)='11' AND YEAR(date_exit)='2021';")->result_array();

		
	}
	public function getGroubOneDay()
	{
		return $this->db->query("SELECT * FROM tb_level_tiket")->result_array();
	}
}
