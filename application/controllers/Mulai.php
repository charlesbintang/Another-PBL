<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mulai extends CI_Controller
{
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
}
