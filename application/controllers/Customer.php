<?php 

class Customer extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
	{
        // $this->load->view('upload_form', array('error' => ' ' ));
        $this->load->model("model_data");
        $data['list_cust'] = $this->model_data->load_customer();
        $this->load->view('templates/header');
        $this->load->view('customer/customer', $data);
        $this->load->view('templates/footer');
    }
    public function add(){
		$this->load->model("model_data");
        $data['tipe'] = "Add";
        if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_data->simpan_cust($_POST);
			redirect("customer/index");
		}

        $this->load->view('templates/header');
        $this->load->view("customer/form_customer",$data);
        $this->load->view('templates/footer');
    }
    public function edit($id){
		$this->load->model("model_data");
        $data['tipe'] = "Edit";
        $data['default'] = $this->model_data->get_default($id);

        if(isset($_POST['tombol_submit'])){
			$this->model_data->update($_POST, $id);
			redirect("customer/index");
		}
        $this->load->view('templates/header');
        $this->load->view("customer/form_customer",$data);
    }
    public function delete($id){
		$this->load->model("model_data");
		$this->model_data->hapus($id);
		redirect("customer/index");
    }
    public function upload()
    {
        $this->load->view('templates/header');
        $this->load->view("customer/form_upload");     
    }
    function do_upload() {
        // setting konfigurasi upload
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = '*';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            $this->load->model("model_data");
		    $this->model_data->addfile($result['full_path']);
            redirect("customer/index");
        }
    }
}