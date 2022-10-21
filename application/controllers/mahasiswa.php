<?php
    class Mahasiswa extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_mahasiswa');
            $this->load->library('form_validation');
        }


        public function index()
        {
            $judul['title'] = 'Mahasiswa Page';
            $data['mahasiswa3'] = $this->m_mahasiswa->tampil_data();
            $this->load->view('templates/header', $judul);
            $this->load->view('v_mahasiswa', $data);
            $this->load->view('templates/footer');
        }

        public function tambah_data()
        {
            if($this->form_validation->run() == false ) {
                
            }
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');
            $jk = $this->input->post('jk');
            $jurusan = $this->input->post('jurusan');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $foto = $_FILES['foto'];
            if ($foto = ''){}else{
                $config['upload_path']          = './assets/img';
                $config['allowed_types']        ='jpg|png|jpeg|gif';
                
                $this->load->library('upload');
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto')){
                    echo "Upload Gagal!"; die();
                }else{
                    $foto=$this->upload->data('file_name');
                }
            }

            $data = array(
                'nama' => $nama,
                'nim' => $nim,
                'jk' => $jk,
                'jurusan' => $jurusan,
                'alamat' => $alamat,
                'email' => $email,
                'foto' => $foto,
            );

            $this->m_mahasiswa->input_data($data, 'mahasiswa3');
            // menampilkan flashdata
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h6><i class="icon fas fa-check"></i> Data berhasil <strong>ditambahkan!</strong></h6>
                                                    </div>');
            redirect('mahasiswa');
        }

        public function hapus($id)
        {
            $data = array ('id' => $id);
            $this->m_mahasiswa->hapus_data($data, 'mahasiswa3');
            // menampilkan flashdata
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h6><i class="icon fas fa-exclamation-triangle"></i> Data berhasil <strong>dihapus!</strong></h6>
                                                    </div>');
            
            redirect('mahasiswa/index');
        }

        public function edit($id)
        {
            $judul['title'] = 'Edit Page';
            $where = array('id' => $id);
            $data['mahasiswa3'] = $this->m_mahasiswa->edit_data($where, 'mahasiswa3')->result();
            $this->load->view('templates/header', $judul);
            $this->load->view('v_edit', $data);
            $this->load->view('templates/footer');
        }

        public function update()
        {
            $id = $this->input->post('id');
            $config['upload_path']          = 'assets/img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            //$this->load->library('upload', $config);
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('foto'))
            {
                //echo "Gagal Tambah"; ----> harus ganti foto di v_edit agar tdk gagal tambah
                $nama =$this->input->post('nama', TRUE);//biar foto lama tdk terhapus
                $nim =$this->input->post('nim', TRUE);
                $jk =$this->input->post('jk', TRUE);
                $jurusan =$this->input->post('jurusan', TRUE);
                $alamat =$this->input->post('alamat', TRUE);
                $email =$this->input->post('email', TRUE);

                $data = array(
                    'nama' => $nama,
                    'nim' => $nim,
                    'jk' => $jk,
                    'jurusan' => $jurusan,
                    'alamat' => $alamat,
                    'email' => $email,
                    );
                    
                $this->db->where('id', $id);
                $this->db->update('mahasiswa3', $data);
                // menampilkan flashdata
                $this->session->set_flashdata('message', '<div class="alert alert-default-success alert-dismissible"
                                                role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                                    Data berhasil<strong> diubah!</strong>
                                                </div>');                
                redirect('mahasiswa');
            }
            else
            {
                $foto = $this->upload->data();
                $foto = $foto['file_name'];
                $nama =$this->input->post('nama', TRUE);
                $nim =$this->input->post('nim', TRUE);
                $jk =$this->input->post('jk', TRUE);
                $jurusan =$this->input->post('jurusan', TRUE);
                $alamat =$this->input->post('alamat', TRUE);
                $email =$this->input->post('email', TRUE);

                $data = array(
                    'nama' => $nama,
                    'nim' => $nim,
                    'jk' => $jk,
                    'jurusan' => $jurusan,
                    'alamat' => $alamat,
                    'email' => $email,
                    'foto' => $foto,
                );

                $this->db->where('id', $id);
                $this->db->update('mahasiswa3', $data);
                // menampilkan flashdata
                $this->session->set_flashdata('message', '<div class="alert alert-default-success alert-dismissible"
                                                role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                                    Foto berhasil<strong> diubah!</strong>
                                                </div>');                
                redirect('mahasiswa');
            }
        }

        public function detail($id)
        {
            $judul['title'] = 'Detail Page';
            $where = array('id' => $id);
            $data['mahasiswa3'] = $this->m_mahasiswa->detail_data($where, 'mahasiswa3')->result();
            $this->load->view('templates/header', $judul);
            $this->load->view('detail', $data);
            $this->load->view('templates/footer');
        }



}
