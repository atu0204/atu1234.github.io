<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jsonedit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('json_model');
		$dl = $this->json_model->showData();
		$dl = json_decode($dl,true);


		$dl = array('mangdl' => $dl);
		$this->load->view('json_edit_view', $dl, FALSE);

		// echo '<pre';
		// var_dump($dl);
		// echo 'pre';
	}
	public function do_edit()
	{
		$ten = $this->input->post('ten');// ten là 1 mảng lưu tất cả ten
		$sdt = $this->input->post('sdt');
		// foreach($ten as $value) {
		// 	var_dump($value);
		// }

		// tạo json để đưa vào dữ liệu
		$dl = array();

		// duyệt từng phần tử trong mảng tên  và mảng sdt để đưa vào dữ liệu
		for($i=0; $i < count($ten) ; $i++)
		{
			$trunggian = array();
			$trunggian['ten'] = $ten[$i];
			$trunggian['sdt'] = $sdt[$i];
			array_push($dl, $trunggian);

		}
		
		$dl =json_encode($dl);
		$this->load->model('json_model');
		if($this->json_model->updateData($dl))
		{
			$this->load->view('success_view');
		}
		else
		{
			echo "thất bại";
		}
		// echo "<pre>";
		// var_dump($dl);
		// echo "<pre>";


	}

}

/* End of file jsonedit.php */
/* Location: ./application/controllers/jsonedit.php */