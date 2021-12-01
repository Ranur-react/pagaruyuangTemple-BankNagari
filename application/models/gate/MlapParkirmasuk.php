<?php
class MlapParkirmasuk extends CI_Model
{

	public function getGroubOneDay()
	{
		$dateNow = date("Y-m-d");

		return $this->db->query("SELECT 
								CASE
								WHEN
									gate_id = '01'
									THEN
										'Mobil'
								ELSE
									'Motor'
								END AS jenis,COUNT(*) AS jumlah_kendaraan
								FROM tb_entry  
								WHERE  DATE BETWEEN '$dateNow 00:00:01.000' AND '$dateNow 23:59:00.000'
								GROUP BY gate_id")->result_array();
	}
	public function getGroub($param)
	{
		$dateStart = date("Y-m-d", strtotime($param['awal']));
		$dateEnd = date("Y-m-d", strtotime($param['akhir']));
		return $this->db->query("SELECT 
								CASE
								WHEN
									gate_id = '01'
									THEN
										'Mobil'
								ELSE
									'Motor'
								END AS jenis,COUNT(*) AS jumlah_kendaraan
								FROM tb_entry  
								WHERE  DATE BETWEEN '$dateStart 00:00:01.000' AND '$dateEnd 23:59:00.000'
								GROUP BY gate_id")->result_array();
	
	}
}
