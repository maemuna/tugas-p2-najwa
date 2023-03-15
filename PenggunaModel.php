<?php namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
	/**
	 * table name
	 */
	protected $table ="pengguna";
	
	/**
	 * allowed Field
	 */
	protected $allowedFields = [
		'nama',
		'email',
		'verifikasi'
	];
	
	 public function getPengguna()
	 {
		 return $this->findAll();
	 }
}