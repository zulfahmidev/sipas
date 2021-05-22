<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan_model extends CI_Model
{
    public function getPengguna()
    {
        return $this->db->select('user.*, user_role.role')
            ->from('user_role')
            ->join('user', 'user.role_id = user_role.id')
            // menyembunyikan akun developer dari table
            ->where('user.role_id !=1')
            ->get()->result_array();
    }

    public function getRole($id = false)
    {
        if ($id == false) {
            return $this->db->get('user_role')->result_array();
        } else {
            return $this->db->get_where('user_role', ['id' => $id])->row_array();
        }
    }

    public function insertRole()
    {
        $data = [
            'role' => $this->input->post('role', true)
        ];

        $this->db->insert('user_role', $data);
        echo json_encode(['success' => 'Data berhasil ditambahkan']);
    }

    public function updateRole($id, $role)
    {
        $this->db->set('role', $role);
        $this->db->where('id', $id);
        $this->db->update('user_role');

        echo json_encode(['success' => 'Data berhasil diperbarui']);
    }

    public function getJabatan($id = false)
    {
        if ($id == false) {
            return $this->db->get('jabatan')->result_array();
        } else {
            return $this->db->get_where('jabatan', ['id' => $id])->row_array();
        }
    }

    public function insertJabatan()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'jabatan' => $this->input->post('jabatan', true)
        ];

        $this->db->insert('jabatan', $data);
        echo json_encode(['success' => 'Data berhasil ditambahkan']);
    }

    public function updateJabatan($id, $jabatan)
    {
        $nama = $this->input->post('nama', true);

        $this->db->set('nama', $nama);
        $this->db->set('jabatan', $jabatan);
        $this->db->where('id', $id);
        $this->db->update('jabatan');

        echo json_encode(['success' => 'Data berhasil diperbarui']);
    }

    public function getSifat($id = null)
    {
        if ($id == false) {
            return $this->db->get('sifat')->result_array();
        } else {
            return $this->db->get_where('sifat', ['id' => $id])->row_array();
        }
    }

    public function insertSifat()
    {
        $data = [
            'sifat' => $this->input->post('sifat', true)
        ];

        $this->db->insert('sifat', $data);
        echo json_encode(['success' => 'Data berhasil ditambahkan']);
    }

    public function updateSifat($id, $sifat)
    {
        $this->db->set('sifat', $id);
        $this->db->where('id', $sifat);
        $this->db->update('sifat');

        echo json_encode(['success' => 'Data berhasil diperbarui']);
    }

    public function getDbTables() // fiturnya tidak jadi diterapkan
    {
        return $this->db->query("SHOW TABLES FROM `" . $this->db->database . "` ")->result_array();
    }
}
