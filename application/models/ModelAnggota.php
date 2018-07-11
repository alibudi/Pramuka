    <?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class ModelAnggota extends CI_Model {

        public function get_provinsi()
        {
            $this->db->order_by('nama_provinsi', 'asc');
            return $this->db->get('tb_provinsi')->result();
        }

        public function get_kabupaten()
        {
            // kita joinkan tabel kota dengan provinsi
            $this->db->order_by('nama_kabupaten', 'asc');
            $this->db->join('tb_provinsi', 'tb_kabupaten.provinsi_id = tb_provinsi.id_provinsi');
            return $this->db->get('tb_kabupaten')->result();
        }

        public function get_kecamatan()
        {
            // kita joinkan tabel kecamatan dengan kota
            $this->db->order_by('nama_kecamatan', 'asc');
            $this->db->join('tb_kabupaten', 'tb_kecamatan.kabupaten_id = tb_kabupaten.id_kabupaten');
            return $this->db->get('tb_kecamatan')->result();
        }

       public function get_desa()
        {
            // kita joinkan tabel kecamatan dengan kota
            $this->db->order_by('nama_desa', 'asc');
            $this->db->join('tb_kecamatan', 'tb_desa.kecamatan_id = tb_kecamatan.id_kecamatan');
            return $this->db->get('tb_desa')->result();
        }


        // untuk edit ambil dari id level paling bawah
        /*public function get_selected_by_id_kecamatan($id_kecamatan)
        {
            $this->db->where('id_kecamatan', $id_kecamatan);
            $this->db->join('tb_kabupaten', 'tb_kecamatan.kabupaten_id = kabupaten.id_kabupaten');
            $this->db->join('tb_provinsi', 'tb_kabupaten.provinsi_id = provinsi.id_provinsi');
            return $this->db->get('tb_kecamatan')->row();
        }
*/
    }
