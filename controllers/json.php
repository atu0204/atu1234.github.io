<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class json extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	 {
	// 	$motcontact = array(

	// 	'ten'=> 'abc1',
	// 	'sdt'=>'0366955444',

	// 	);
	// 	$haicontact = array(

	// 	'ten'=> 'tên hoai',
	// 	'sdt'=>'036695544456',

	// 	);
	// 	$caccontact = array();
	// 	array_push($caccontact, $motcontact,$haicontact);


	// 	// echo '<pre>';
	// 	// var_dump($caccontact);
	// 	// echo '<pre>';


	// 	// mã hoá các contact thành json

	// 	$noidungmahoa =json_encode($caccontact);

	// 	// echo '<pre>';
	// 	// var_dump($noidungmahoa);
	// 	// echo '<pre>';

 
	// 	//gọi model để insert dữ liệu

	// 	$this->load->model('json_model');
	// 	 $this->json_model->insertData('contact',$noidungmahoa);

	// 	 $this->load->model('json_model');
		$ketqua = $this->json_model->showData();


		// giải mã bằng json decode
		$ketqua = json_decode($ketqua);
		$ketqua = array('mangkq'=> $ketqua);

		$this->load->view('json_view', $ketqua, FALSE);
		

		// echo "<pre>";
		// var_dump($ketqua);

	}
	public function xoa_json($sdt)
	{
		// lấy dữ liệu ra
		$dulieu = $this->json_model->showData();

		// giải mã để biến json thành mãng dữ liệu 
		$dulieu=json_decode($dulieu);



		//duyệt các phần tử trong mảng xem có trùng sdt không,nếu có dùng unset(tenmang , key ) để xoá phần tử trùng ra khỏi mảng gốc

		foreach ($dulieu as $key => $value) {
			if($value->sdt == $sdt)
			{
				// echo "<pre>";
				// var_dump($value->sdt);
				// echo "pre";

				unset($dulieu[$key]);
			}
			
		}

		// mã hoá dữ liệu thành chuỗi json sau đó mới insert
		$dulieu = json_encode($dulieu);
		if( $this->json_model->updateData($dulieu))
		{
			$this->load->view('success_view.php');
		}
		
			
		
		// echo"<pre>";
		// var_dump($dulieu);
		// echo "<pre";

	}

	public function add_data()
	{
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');


		//  lấy dữ liệu json ra bằng hàm showdata
		$dulieu=$this->json_model->showData();


		// giải mã thành một mảng
		$dulieu = json_decode($dulieu , true);

		echo "<pre>";
		var_dump($dulieu);
		echo "<pre>";


		// tạo 1 phần tử con

		$con =array(
		'ten'=>$ten,
		'sdt'=>$sdt

		);
		array_push($dulieu, $con);


		echo "<pre>";
		var_dump($dulieu);
		echo "<pre>";

		// mã hoá và gọi model
		$dulieu= json_encode($dulieu);

		// gọi function trong model
		if($this->json_model->updateData($dulieu))
		{
			$this->load->view('success_view');
		}



		
	}

}

/* End of file json.php */
/* Location: ./application/controllers/json.php */