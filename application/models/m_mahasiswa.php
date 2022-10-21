<?php

    class M_mahasiswa extends CI_Model{
        public function tampil_data()
        {
            return $this->db->get('mahasiswa3')->result();
        }

        public function input_data($data)
        {
            $this->db->insert('mahasiswa3', $data);
        }

        public function hapus_data($data)
        {
            $this->db->delete('mahasiswa3', $data);
        }

        public function ubah_data($data)
        {
            return $this->db->get_where('mahasiswa3')->result();
        }

        public function edit_data($where, $table)
        {
            return $this->db->get_where($table, $where);
        }

        public function update_data($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function detail_data($where, $table)
        {
            return $this->db->get_where($table, $where);
        }


}