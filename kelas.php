<?php
class kelas
{
public $nama;
public $kelas;


public function __construct($nama,$kelas)
{
$this->nama = $nama;
$this->kelas = $kelas;

}

public function get_nama()
	{
		return $this->nama;
	}
	public function get_kelas()
	{
		return $this->kelas;
	}
}


?>