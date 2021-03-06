<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class SaranMasukan extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('model_app', 'model');
    }

    public function index_post()
    {
        $email = $this->post('email');
        $data = [
            'tanggal' => $this->post('tanggal'),
            'nama' => $this->post('nama'),
            'email' => $email,
            'subjek' => $this->post('subjek'),
            'pesan' => $this->post('pesan'),
            'status' => 1,
        ];

        // email 
        $web = "https://ronisky.com/";
        $subject = "Musuem Monpera Jawa Barat - Saran dan Masukan";
        $message = "
                    <h2>Terima kasih telah memberikan saran dan masukan</h2>
                    <p>Saran dan Masukan anda sangat berati bagi kami untuk terus meningkatkan</>
                    <p>pelayanan dan pengalaman Anda di Museum Monumen Perjuangan Rakyat Jawa Barat</p>
                    <br>
                    <p>Salam Hangat <a href=' $web'>Museum Dihatiku</a></p>
                    
                ";

        kirim_email($email, $subject, $message);

        if ($this->model->insert('tb_saran_masukan', $data) > 0) {
            $this->response([
                'status'    => true,
                'message'   => "Saran Masukan berhasil dikirim"
            ], RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status'    => false,
                'message'   => "oops! Coba lagi!"
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
}
