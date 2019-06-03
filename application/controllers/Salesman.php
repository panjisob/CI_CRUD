<?php 

class Salesman extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
	{
        $this->load->model("model_salesman");
        $data['list_sales'] = $this->model_salesman->load_salesman();
        $this->load->view('templates/header');
		$this->load->view('salesman/sales', $data);
        $this->load->view('templates/footer');
    }
    public function add(){
		$this->load->model("model_salesman");
        $data['tipe'] = "Add";
        if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_salesman->simpan_data($_POST);
			redirect("salesman/index");
		}

        $this->load->view('templates/header');
        $this->load->view("salesman/form_sales",$data);
        $this->load->view('templates/footer');
    }
    public function edit($id){
		$this->load->model("model_salesman");
        $data['tipe'] = "Add";
        $data['default'] = $this->model_salesman->get_default($id);

        if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_salesman->update($_POST,$id);
			redirect("salesman/index");
		}

        $this->load->view('templates/header');
        $this->load->view("salesman/form_sales",$data);
        $this->load->view('templates/footer');
    }
    public function delete($id){
		$this->load->model("model_salesman");
		$this->model_salesman->hapus($id);
		redirect("salesman/index");
    }
    public function upload()
    {
        $this->load->view('templates/header');
        $this->load->view("salesman/form_upload");     
    }
    public function do_upload() {
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
            $this->load->model("model_salesman");
		    $this->model_salesman->addfile($result['full_path']);
            redirect("salesman/index");
        }
    }

}


?>