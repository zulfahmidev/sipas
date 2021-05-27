<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Template
{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function render_page($content, $data = NULL)
    {
        $web_name = $this->_ci->db->get_where('pengaturan', ['key' => 'web_name'])->row_array()['value'];
        $logo = $this->_ci->db->get_where('pengaturan', ['key' => 'logo'])->row_array()['value'];
        $data['logo'] = $logo;
        $data['web_name'] = $web_name;
        $this->_ci->load->view('templates/header', $data);
        $this->_ci->load->view('templates/sidebar', $data);
        $this->_ci->load->view('templates/topbar', $data);
        $this->_ci->load->view($content, $data);
        $this->_ci->load->view('templates/footer', $data);
    }
}
