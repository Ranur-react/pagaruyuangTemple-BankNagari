<?php
class MlapParkirKeluar extends CI_Model
{
	public function getallOneDay()
	{
		return $this->db->query("SELECT * FROM tb_exit WHERE date_exit=now()")->result_array();
	}
	public function getGroubOneDay()
	{
		return $this->db->query("SELECT * FROM tb_level_tiket")->result_array();
	}
}
