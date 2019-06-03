<?php 

class Order extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
	{
        $this->load->model("model_order");
        $data['list_order'] = $this->model_order->load_order();
        $this->load->view('templates/header');
        $this->load->view('order/order',$data);
        $this->load->view('templates/footer');
    }
    public function add(){
		$this->load->model("model_order");
        $data['tipe'] = "Add";
        if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_order->simpan_data($_POST);
			redirect("order/index");
		}

        $this->load->view('templates/header');
        $this->load->view("order/form_order",$data);
        $this->load->view('templates/footer');
    }
    public function edit($id){
		$this->load->model("model_order");
        $data['tipe'] = "Add";
        $data['default'] = $this->model_order->get_default($id);

        if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_order->update($_POST,$id);
			redirect("order/index");
		}

        $this->load->view('templates/header');
        $this->load->view("order/form_order",$data);
        $this->load->view('templates/footer');
    }
    public function delete($id){
		$this->load->model("model_order");
		$this->model_order->hapus($id);
		redirect("order/index");
    }
    public function upload()
    {
        $this->load->view('templates/header');
        $this->load->view("order/form_upload");     
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
            $this->load->model("model_order");
		    $this->model_order->addfile($result['full_path']);
            redirect("order/index");
        }
    }

}


?>