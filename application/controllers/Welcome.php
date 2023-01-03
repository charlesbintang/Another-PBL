<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$query = $this->Crudmengaji->getDataRating();
		$data = array(
			'rating' => $query
		);
		$this->load->view('mengaji/awal', $data);
	}

	public function rating()
	{
		$nama = $this->input->post('nama');
		$alasan = $this->input->post('alasan');

		if ($nama == '' || $alasan == '') {
			echo '
            <script>
            alert("Mohon beri rating, Nama, dan alasannya !");
            document.location.href = "' . base_url('') . '"
            </script>
            ';
			exit;
		}

		$data = array(
			'userName' => $nama
		);
		$this->session->set_userdata($data);

		$rate = $this->input->post('rate');
		$tanggalWaktu = $this->input->post('tanggalWaktu');

		$arrRating = array(
			'id_rating' => '',
			'rate' => $rate,
			'nama' => $nama,
			'alasan' => $alasan,
			'tanggal_waktu' => $tanggalWaktu
		);

		$this->Crudmengaji->insertRating($arrRating);
		redirect('');
	}
}
