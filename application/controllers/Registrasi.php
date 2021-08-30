<?php
class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => "{field} wajib diisi!"]);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => "{field} wajib diisi!"]);
        $this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]', ['required' => "{field} wajib diisi!", 'matches' => '{field} tidak cocok!']);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('register');
        } else {
            $data = [
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password1'),
                'role_id'   => 2
            ];

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
