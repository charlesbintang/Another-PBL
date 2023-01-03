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
    }

    public function index()
    {
        $this->load->view('mengaji/matapelajaran');
    }

    public function aqidah_akhlak()
    {
        $halMapel = "AqidahAkhlak";
        $queryKomenAqidah = $this->Crudmengaji->getDataKomentar($halMapel);
        $data = array('qryKomen' => $queryKomenAqidah);
        $this->load->view('mengaji/mpAqidahAkhlak', $data);
    }

    public function fiqih()
    {
        $halMapel = "Fiqih";
        $queryKomenAqidah = $this->Crudmengaji->getDataKomentar($halMapel);
        $data = array('qryKomen' => $queryKomenAqidah);
        $this->load->view('mengaji/mpFiqih', $data);
    }

    public function kisah_nabi()
    {
        $halMapel = "KisahNabi";
        $queryKomenAqidah = $this->Crudmengaji->getDataKomentar($halMapel);
        $data = array('qryKomen' => $queryKomenAqidah);
        $this->load->view('mengaji/mpKisahNabi', $data);
    }

    public function tajwid()
    {
        $halMapel = "Tajwid";
        $queryKomenAqidah = $this->Crudmengaji->getDataKomentar($halMapel);
        $data = array('qryKomen' => $queryKomenAqidah);
        $this->load->view('mengaji/mpTajwid', $data);
    }

    public function tambahKomentarAqidah()
    {
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

        $data = array(
            'userName' => $nama
        );
        $this->session->set_userdata($data);

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
        $nama = $this->input->post('nama');
        $komentar = $this->input->post('komentar');

        if ($nama == '' || $komentar == '') {
            echo '
            <script>
            alert("Mohon isi Nama atau Komentarnya!");
            document.location.href = "' . base_url('mulai/fiqih') . '"
            </script>
            ';
            exit;
        }

        $data = array(
            'userName' => $nama
        );
        $this->session->set_userdata($data);

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
        redirect('mulai/fiqih');
    }

    public function tambahKomentarKisah()
    {
        $nama = $this->input->post('nama');
        $komentar = $this->input->post('komentar');

        if ($nama == '' || $komentar == '') {
            echo '
            <script>
            alert("Mohon isi Nama atau Komentarnya!");
            document.location.href = "' . base_url('mulai/kisah_nabi') . '"
            </script>
            ';
            exit;
        }

        $data = array(
            'userName' => $nama
        );
        $this->session->set_userdata($data);

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
        redirect('mulai/kisah_nabi');
    }

    public function tambahKomentarTajwid()
    {
        $nama = $this->input->post('nama');
        $komentar = $this->input->post('komentar');

        if ($nama == '' || $komentar == '') {
            echo '
            <script>
            alert("Mohon isi Nama atau Komentarnya!");
            document.location.href = "' . base_url('mulai/tajwid') . '"
            </script>
            ';
            exit;
        }

        $data = array(
            'userName' => $nama
        );
        $this->session->set_userdata($data);

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
        redirect('mulai/tajwid');
    }

    public function deleteAqidah($idKomen)
    {
        $this->Crudmengaji->deleteDataKomentar($idKomen);
        redirect('mulai/aqidah_akhlak');
    }

    public function deleteFiqih($idKomen)
    {
        $this->Crudmengaji->deleteDataKomentar($idKomen);
        redirect('mulai/fiqih');
    }

    public function deleteKisah($idKomen)
    {
        $this->Crudmengaji->deleteDataKomentar($idKomen);
        redirect('mulai/kisah_nabi');
    }

    public function deleteTajwid($idKomen)
    {
        $this->Crudmengaji->deleteDataKomentar($idKomen);
        redirect('mulai/tajwid');
    }

    public function editAqidah($idKomen)
    {
        $komentar = $this->input->post('komentar');
        $tanggalWaktu = $this->input->post('tanggalWaktu');

        $data = array(
            'isi_komentar' => $komentar,
            'tanggal_waktu' => $tanggalWaktu
        );

        $this->Crudmengaji->updateDataKomentar($idKomen, $data);
        redirect('mulai/aqidah_akhlak');
    }

    public function editFiqih($idKomen)
    {
        $komentar = $this->input->post('komentar');
        $tanggalWaktu = $this->input->post('tanggalWaktu');

        $data = array(
            'isi_komentar' => $komentar,
            'tanggal_waktu' => $tanggalWaktu
        );

        $this->Crudmengaji->updateDataKomentar($idKomen, $data);
        redirect('mulai/fiqih');
    }

    public function editKisah($idKomen)
    {
        $komentar = $this->input->post('komentar');
        $tanggalWaktu = $this->input->post('tanggalWaktu');

        $data = array(
            'isi_komentar' => $komentar,
            'tanggal_waktu' => $tanggalWaktu
        );

        $this->Crudmengaji->updateDataKomentar($idKomen, $data);
        redirect('mulai/kisah_nabi');
    }

    public function editTajwid($idKomen)
    {
        $komentar = $this->input->post('komentar');
        $tanggalWaktu = $this->input->post('tanggalWaktu');

        $data = array(
            'isi_komentar' => $komentar,
            'tanggal_waktu' => $tanggalWaktu
        );

        $this->Crudmengaji->updateDataKomentar($idKomen, $data);
        redirect('mulai/tajwid');
    }
}
