<?php
class M_surat extends CI_Model
{
	public function sktm($data)
	{
		$this->db->insert('surat_tidak_mampu', $data);
	}

	public function sku($data)
	{
		$this->db->insert('surat_usaha', $data);
	}

	public function skd($data)
	{
		$this->db->insert('surat_domisili', $data);
	}

	public function skk($data)
	{
		$this->db->insert('surat_kematian', $data);
	}

	public function spak($data)
	{
		$this->db->insert('surat_kelahiran', $data);
	}

	public function skp($data)
	{
		$this->db->insert('surat_keterangan_pengantar', $data);
	}

	public function cek_sktm()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_tidak_mampu')->row_array();
	}
}
