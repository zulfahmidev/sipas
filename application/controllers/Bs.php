<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logout();
        $this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
    
    public function download() {
        require_once APPPATH.'../vendor/autoload.php';

        $filename = 'SuratTugas.pdf';
        $title = 'Surat Tugas';
        
        $html = $_POST['html'];

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetTitle($title);
        $mpdf->WriteHTML($html);
        return $mpdf->Output($filename, 'I');
    }

    // public function download() {
    //     $this->load->library('Pdf');
    //     $data['html'] = $_POST['html'];
    //     $this->load->view('view_file', $data);
    // }

    public function index() {
        $web_name = $this->db->get_where('pengaturan', ['key' => 'web_name'])->row_array()['value'];
        $logo = $this->db->get_where('pengaturan', ['key' => 'logo'])->row_array()['value'];
        $data = [
            'user' => $this->user,
            'judul' => 'Buat Surat',
            'web_name' => $web_name,
            'logo' => $logo,
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/template_head', $data);
        $this->load->view('surat/surat_tugas', $data);
        $this->load->view('surat/template_foot', $data);
        $this->load->view('templates/footer', $data);
    }
}