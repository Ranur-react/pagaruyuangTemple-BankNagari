<?php
class MlapParkirKeluar extends CI_Model
{
	public function getallOneDay()
	{
		$dateNow= date("Y-m-d");
		$montNow= date("m");
		$yearNow= date("y");
		// return $this->db->query("SELECT * FROM tb_exit WHERE DAY(date_exit)='$dateNow' AND MONTH(date_exit)='$montNow' AND YEAR(date_exit)='$yearNow';")->result_array();
		return $this->db->query("SELECT * FROM tb_exit WHERE  date_exit BETWEEN '$dateNow 00:00:01.000' AND '$dateNow 23:59:00.000';")->result_array();

		
	}
	public function getGroubOneDay()
	{
		return $this->db->query("SELECT * FROM tb_level_tiket")->result_array();
	}
}
