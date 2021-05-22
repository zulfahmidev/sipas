<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logout();

        $this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Sk_model', 'sk');
    }

    public function index()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Surat Keluar'
        ];

        $this->template->render_page('surat-keluar/index', $data);
    }

    public function ambilData()
    {
        if ($this->input->is_ajax_request() == true) { // jika ada request ajax yang dikirimkan
            $list = $this->sk->get_datatables();
            $data = [];
            $no = $_POST['start'];
            foreach ($list as $field) {

                $no++;
                $row = [];

                // tombol aksi
                $btnAction = "<div class=\"dropdown\">
                    <button class=\"btn btn-sm btn-info dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fa fa-fw fa-list\"></i>
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <a href='surat-keluar/$field->id' class='dropdown-item'>Detail</a>
                        <a href='surat-keluar/ubah/$field->id' class='dropdown-item'>Ubah</a>
                    </div>
                </div>";

                $btnFile = "<div class=\"dropdown\">
                    <button class=\"btn btn-sm btn-success dropdown-toggle\" type=\"button\" id=\"dropdownFileButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fa fa-fw fa-list\"></i>
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownFileButton\">
                    <a href=" . base_url('openfile/') . $field->file . " target=\"_blank\" class='dropdown-item'> Preview</a>
                    <a href=" . base_url('export/download/') . $field->file . " class='dropdown-item'> Download</a>
                    </div>
                </div>";

                $row[] = "<input type=\"checkbox\" class=\"centangId\" value=\"$field->id\" name=\"id[]\">";
                $row[] = $field->no_agenda;
                $row[] = $field->pengirim;
                $row[] = $field->no_surat;
                $row[] = date('d/m/Y', strtotime($field->tgl_surat));
                ($field->file == null ? $row[] = '-' : $row[] = $btnFile);
                $row[] = $btnAction;
                $data[] = $row;
            }

            $output = [
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->sk->count_all(),
                "recordsFiltered" => $this->sk->count_filtered(),
                "data" => $data,
            ];
            //output dalam format JSON
            echo json_encode($output);
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }

    public function hapus_multiple()
    {
        if ($this->input->is_ajax_request() == true) {

            $id = $this->input->post('id');
            $jmlData = count($id);

            $hapusData = $this->sk->hapus_multiple($id, $jmlData);

            if ($hapusData == true) {
                $msg = [
                    'berhasil' => "$jmlData data surat masuk dihapus."
                ];
            }

            echo json_encode($msg);
        } else {
            exit('Gagal terhubung!');
        }
    }

    public function detail($id)
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Detail Surat Keluar',
            'surat' => $this->sk->getSuratKeluar($id),
        ];

        $this->template->render_page('surat-keluar/detail', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('no_agenda', 'No. Agenda', 'required|numeric|is_unique[surat_keluar.no_agenda]');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
        $this->form_validation->set_rules('no_surat', 'No. Surat', 'required');
        $this->form_validation->set_rules('isi', 'Isi Ringkas', 'required|max_length[300]');
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'user' => $this->user,
                'judul' => 'Tambah Surat Keluar'
            ];

            $this->template->render_page('surat-keluar/tambah', $data);
        } else {
            // jika validasi lolos, insert data
            $this->sk->insert();
        }
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $data['surat'] = $this->sk->getSuratKeluar($id);

        $this->db->where('id', $id);
        $this->db->delete('surat_keluar');
        $this->session->set_flashdata('msg', 'dihapus.');

        // Hapus file di folder uploads
        unlink(FCPATH . './uploads/' . $data['surat']['file']);
        redirect('surat-keluar');
    }

    public function Ubah($id)
    {
        $noAgenda = $this->input->post('no_agenda');
        $sk = $this->sk->getSuratKeluar($id);
        if ($sk['no_agenda'] == $noAgenda) {
            $ruleAgenda = 'required|numeric';
        } else {
            $ruleAgenda = 'required|numeric|is_unique[surat_keluar.no_agenda]';
        }
        $this->form_validation->set_rules('no_agenda', 'No. Agenda', $ruleAgenda);
        $this->form_validation->set_rules('no_surat', 'No. Surat', 'required');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
        $this->form_validation->set_rules('isi', 'Isi Ringkas', 'required|max_length[300]');
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('tgl_diterima', 'Tanggal Diterima', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'user' => $this->user,
                'judul' => 'Ubah Surat Keluar',
                'surat' => $this->sk->getSuratKeluar($id)
            ];

            $this->template->render_page('surat-keluar/ubah', $data);
        } else {
            // jika validasi lolos, insert data
            $this->sk->ubah();
        }
    }
}
