<?php

class Home extends CI_Controller 
{
	public function __construct()
  {
  	parent::__construct();
  }

  public function index()
  {
	$info = array('result' => 'Загрузка картинок в Codeigniter');
	$this->load->view('index', $info);
  }

  public function selectImages()
  {
		$send=$this->input->post('send');
		if(!$send)
			$this->load->view('form_upload');
		else
		{
			  $config['upload_path'] = './assets/images/';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg';
			  $config['max_size'] = 20480;
			  $config['max_width'] = 4928;
			  $config['max_height']  = 3264;

			  $this->load->library('upload', $config);

			  if ( ! $this->upload->do_upload('image'))
			  {
				$data = array('error' => $this->upload->display_errors());
						$this->load->view('form_upload', $data);
			  }
			  else
			  {
				//receive data about upload 
				$info = array('upload_data' => $this->upload->data());
				/*
				$data = array(
					'filename'=>$info['upload_data']['file_name'],
					'filetype'=>$info['upload_data']['file_type'],
					'filepath'=>$info['upload_data']['file_path'],
					'filesize'=>$info['upload_data']['file_size'],
					'imagewidth'=>$info['upload_data']['image_width'],
					'imageheight'=>$info['upload_data']['image_height'],
					'fileext'=>$info['upload_data']['file_ext'],
				);
				*/
				$this->load->view('index', $info);
			  }
		}
  }
  
}
?>
