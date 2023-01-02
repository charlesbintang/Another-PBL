<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mulai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crudmengaji');
        //load Helper for Form
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('mengaji/matapelajaran');
    }

    public function aqidah_akhlak()
    {
        $this->load->view('mengaji/mpAqidahAkhlak');
    }

    public function fiqih()
    {
        $this->load->view('mengaji/mpFiqih');
    }

    public function kisah_nabi()
    {
        $this->load->view('mengaji/mpKisahNabi');
    }

    public function tajwid()
    {
        $this->load->view('mengaji/mpTajwid');
    }

    public function tambahKomentarAqidah()
    {
        //NTAR SAYA LANJUT KALAU UDH BUAT DI HALAMANNYA
        $nama = $this->input->post('nama');
        $komentar = $this->input->post('komentar');

        if ($nama == '' || $komentar == '') {
            echo '
            <script>
            alert("Mohon isi Nama atau Komentarnya!");
            document.location.href = "' . base_url('mulai/aqidah_akhlak') . '"
            </script>
            ';
            exit;
        }

        $halMapel = $this->input->post('halaman');
        $tanggalWaktu = $this->input->post('tanggalWaktu');

        $arrKomentar = array(
            'id_komentar' => '',
            'halaman_mapel' => $halMapel,
            'nama' => $nama,
            'isi_komentar' => $komentar,
            'tanggal_waktu' => $tanggalWaktu
        );

        $this->Crudmengaji->insertDataKomentar($arrKomentar);
        redirect('mulai/aqidah_akhlak');
    }
    public function tambahKomentarFiqih()
    {
        //NTAR SAYA LANJUT KALAU UDH BUAT DI HALAMANNYA
        $this->load->view('mengaji/mpFiqih');
    }
    public function tambahKomentarKisah()
    {
        //NTAR SAYA LANJUT KALAU UDH BUAT DI HALAMANNYA
        $this->load->view('mengaji/mpKisahNabi');
    }
    public function tambahKomentarTajwid()
    {
        //NTAR SAYA LANJUT KALAU UDH BUAT DI HALAMANNYA
        $this->load->view('mengaji/mpTajwid');
    }
}
