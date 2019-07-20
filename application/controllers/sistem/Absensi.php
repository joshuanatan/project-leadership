<?php
class Absensi extends CI_Controller{

    private function req(){
        $this->load->view("req/head");
        $this->load->view("plugin/datatable/datatable-css");
        $this->load->view("plugin/breadcrumb/breadcrumb-css");
        $this->load->view("plugin/modal/modal-css");
        $this->load->view("plugin/form/form-css");
        $this->load->view("req/head-close");
        $this->load->view("req/body-open");
        $this->load->view("req/top-navbar");
        $this->load->view("req/navbar");
    }
    public function close(){
        $this->load->view("req/script");
        $this->load->view("plugin/datatable/page-datatable-js");
        $this->load->view("plugin/form/form-js");
        $this->load->view("plugin/tabs/tabs-js");
        $this->load->view("req/body-close");
        $this->load->view("req/html-close");
    }
    public function index(){
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("sistem/absen/category-header");
        $this->load->view("sistem/absen/category-body");
        $this->load->view("req/content-close");
        $this->close();
    }

    public function insert(){
        $hadir = $this->input->post('id_submit_karyawan');
        
        foreach($hadir as $a){
            $data = array(
                'id_submit_karyawan'=>$a
            );
            
            insertRow("absen", $data);
        }
        $data['id_user_add'] = 0;

        
        redirect('sistem/absensi');
    }
}
?>