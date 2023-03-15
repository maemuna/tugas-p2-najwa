<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
	/**
	 * table name
	 */
	protected $table ="kategori";
	
	/**
	 * allowed Field
	 */
	protected $allowedFields = [
		'nama',
		'kategori',
		'status'
	];
	
	 public function getKategori()
	 {
		 return $this->findAll();
	 }
}