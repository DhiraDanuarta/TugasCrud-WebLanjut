<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MKomponen004 extends CI_Model
{
    private $tabel = 'komponen_004';

    public function getAllKomponen()
    {
        return $this->db->get($this->tabel)->result_array();
    }

    public function getBarangById($id)
    {
        return $this->db->get_where($this->tabel, ['id_komponen' => $id])->row_array();
    }

    public function addKomponen()
    {
        $data = [
            "merek_004" => $this->input->post('merek'),
            "kapasitas_004" => $this->input->post('kapasitas'),
            "harga_004" => $this->input->post('harga'),
            "jenis_004" => $this->input->post('jenis'),
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function deleteKomponen($id)
    {
        $this->db->delete($this->tabel, ['id_komponen' => $id]);
    }

    public function updateKomponen()
    {
        $data_ubah = [
            "merek_004" => $this->input->post('merek'),
            "kapasitas_004" => $this->input->post('kapasitas'),
            "harga_004" => $this->input->post('harga'),
            "jenis_004" => $this->input->post('jenis'),
        ];
        $this->db->where('id_komponen', $this->input->post('id'));
        $this->db->update($this->tabel, $data_ubah);
    }
}

/* End of file MKomponen004.php */
