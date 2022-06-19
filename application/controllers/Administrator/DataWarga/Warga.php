<?php
class Warga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_warga');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Warga',
			'warga' => $this->M_warga->getWarga()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function index_tambah()
	{
		$data = array(
			'title' => 'Data Warga'
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[warga.nik]|min_length[16]|max_length[16]', [
			'required' => 'NIK Warga tidak boleh kosong!',
			'numeric' => 'NIK Warga harus berupa angka!',
			'is_unique' => 'NIK Warga sudah terdaftar!',
			'min_length' => 'NIK Warga minimal 16 karakter!',
			'max_length' => 'NIK Warga maksimal 16 karakter!'
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('agama', 'Agama', 'required', [
			'required' => 'Agama Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'required', [
			'required' => 'Golongan Darah Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', [
			'required' => 'Pendidikan Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('status_pernikahan', 'Status Pernikahan ', 'required', [
			'required' => 'Status Pernikahan  Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
			'required' => 'Pekerjaan Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
			'required' => 'Tempat Lahir Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
			'required' => 'Tanggal Lahir Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('rt', 'Rt', 'required', [
			'required' => 'RT Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('rw', 'Rw', 'required', [
			'required' => 'RW Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Warga tidak boleh kosong!'
		]);

		$nik =  $this->input->post('nik');
		$nama =  $this->input->post('nama');
		$jekel =  $this->input->post('jekel');
		$agama =  $this->input->post('agama');
		$golongan_darah =  $this->input->post('golongan_darah');
		$pendidikan =  $this->input->post('pendidikan');
		$status_pernikahan =  $this->input->post('status_pernikahan');
		$pekerjaan =  $this->input->post('pekerjaan');
		$tempat_lahir =  $this->input->post('tempat_lahir');
		$tgl_lahir =  $this->input->post('tgl_lahir');
		$rt =  $this->input->post('rt');
		$rw =  $this->input->post('rw');
		$alamat =  $this->input->post('alamat');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Form harus di lengkapi !');
			$this->index_tambah();
		} else {
			$data = array(
				'nik' => $nik,
				'nama' => $nama,
				'jekel' => $jekel,
				'agama' => $agama,
				'golongan_darah' => $golongan_darah,
				'pendidikan' => $pendidikan,
				'status_pernikahan' => $status_pernikahan,
				'pekerjaan' => $pekerjaan,
				'tempat_lahir' => $tempat_lahir,
				'tgl_lahir' => $tgl_lahir,
				'rt' => $rt,
				'rw' => $rw,
				'alamat' => $alamat,
				'created_at' => date('Y-m-d H:i:s')
			);
			$this->session->set_flashdata('success', 'Data warga berhasil di simpan !');
			$this->M_warga->create($data);
			redirect('data-warga');
		}
	}

	public function index_edit($id)
	{
		$data = array(
			'title' => 'Edit Data Warga',
			'warga' => $this->M_warga->getEdit($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/edit', $data);
		$this->load->view('layout/footer', $data);
	}

	public function edit($id)
	{
		$nik =  $this->input->post('nik');
		$nama =  $this->input->post('nama');
		$jekel =  $this->input->post('jekel');
		$agama =  $this->input->post('agama');
		$golongan_darah =  $this->input->post('golongan_darah');
		$pendidikan =  $this->input->post('pendidikan');
		$status_pernikahan =  $this->input->post('status_pernikahan');
		$pekerjaan =  $this->input->post('pekerjaan');
		$tempat_lahir =  $this->input->post('tempat_lahir');
		$tgl_lahir =  $this->input->post('tgl_lahir');
		$rt =  $this->input->post('rt');
		$rw =  $this->input->post('rw');
		$alamat =  $this->input->post('alamat');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'jekel' => $jekel,
			'agama' => $agama,
			'golongan_darah' => $golongan_darah,
			'pendidikan' => $pendidikan,
			'status_pernikahan' => $status_pernikahan,
			'pekerjaan' => $pekerjaan,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'rt' => $rt,
			'rw' => $rw,
			'alamat' => $alamat,
			'updated_at' => date('Y-m-d H:i:s')
		);
		$this->session->set_flashdata('success', 'Data warga berhasil di update !');
		$this->M_warga->edit($data, $id);
		redirect('data-warga');
	}

	public function detail($id)
	{
		$nik = $this->input->get('nik');
		$data = array(
			'title' => 'Detail Data Warga | ' . $nik,
			'nik'   => $nik,
			'detail'    => $this->M_warga->getDetail($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/detail', $data);
		$this->load->view('layout/footer', $data);
	}

	public function delete($id)
	{
		$this->M_warga->delete($id);
		$this->session->set_flashdata('danger', 'Data berhasil di hapus !');

		redirect('data-warga', 'refresh');
	}
}
