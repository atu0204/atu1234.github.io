<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertData($ten,$dulieu)
	{
		// tạo mảng dữ liệu
		$mangdl = array(
		'ten' => $ten,
		'dulieu' =>$dulieu


		);
		$this->db->insert('savetable', $mangdl);
		return $this->db->insert_id();

	}

	public function showData()
	{
		$this->db->select('*');
		$this->db->where('ten', 'contact');
		$dulieu = $this->db->get('savetable');
		$dulieu = $dulieu ->result_array();

		foreach ($dulieu as $value) {
			$kq = $value ['dulieu'];

			
		}
		return $kq;
	}

	public function updateData($dulieu)
	{
		$this->db->where('ten', 'contact');

		// tạo mảng lưu trữ dữ liệu

		$dulieu = array(
			'ten'=>'contact',
			'dulieu'=> $dulieu

		);
		 return $this->db->update('savetable', $dulieu);
	} 
}

/* End of file json_model.php */
/* Location: ./application/models/json_model.php */