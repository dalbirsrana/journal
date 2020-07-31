<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

		public function __construct()
				{
						parent::__construct();
						$this->load->helper('url_helper');
						$this->load->helper('form');
				}
	 
	 
		public function index($m=NULL)
		{
					$data['title'] = "Upload Article";
					$data['page'] = "articles";
					
					switch($m){
						case 'sent' : $data['msg'] = "Mail sent Successfully!";
						break;
						case 'error' : $data['msg'] = "Error Sending mail!";
						break;
						case 'errorfile' : $data['msg'] = "Error uploading File! Please retry or mail directly to journal11@gmail.com";
						break;
						default: $data['msg'] = '';
					}
					
					if ( ! file_exists(APPPATH.'views/templates/header.php'))
        			{
                		show_404();
        			}
					else
					{
						$this->load->view('templates/header', $data);						
					}
					
					
					$this->load->view('upload-form');
					
				
					if ( ! file_exists(APPPATH.'views/templates/footer.php'))
        			{
                		show_404();
        			}
					else
					{
						$this->load->view('templates/footer');						
					}				

		}

	    public function do_upload()
		{
			$subject = "Article submitted by: " . $this->input->post("dname");
			$email = $this->input->post("demail");
			$file_data =  $this->upload_file();
			
			if(is_array($file_data))
			{
				$message = "Name: " . $this->input->post("dname") . "<br />";
				$message .= 'Email: '. $this->input->post("demail");
				$config = array(
					'protocol' => 'smtp',
					'smtp_host' => 'relay-hosting.secureserver.net',
					'smtp_port' => 25,
					'mailtype' => 'html',
					'charset' => 'iso-8859-1',
					'wordwrap' => TRUE
					);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from('journals@gmail.com');
				$this->email->to('journal11@gmail.com');
				$this->email->subject($subject);
				$this->email->message($message);
				
				$this->email->attach($file_data['full_path']);
				
				$this->load->helper("file");
				
							if($this->email->send())
								{
									if(delete_files($file_data['file_path']))
									{
									$this->index('sent');
									//redirect('articles/index/sent');
									}
								}
							else
								{
									if(delete_files($file_data['file_path']))
									{
										redirect('articles/index/error');
									}
								}
								
							
			}
			else
			{
				redirect('articles/index/errorfile');
			}
		}
		
		function upload_file()
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = '2200';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('darticle'))
			{
				return $this->upload->data();
			}
			else
			{
				
				return $this->upload->display_errors();
				redirect('articles/index/errorfile');
			}			
		}



}