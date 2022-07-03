<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CetakKartu extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->model('UserModel');
    $this->load->library('Pdf');
		$this->AuthModel->cekAuth();
		$data['profile'] = $this->UserModel->getUserId($this->session->userdata['nisn']);
    $this->load->vars($data);
	}
  public function index(){
    $data["title"] = "Cetak Kartu | PPDB";
    $this->load->view('template/v_header',$data);
    $this->load->view('v_cetak');
    $this->load->view('template/v_footer');
  }

  public function printKartuPendaftaran(){
    error_reporting(0); 
    $pdf = new FPDF("P","cm","A4");

    $pdf->SetMargins(2,0.5,1);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','B',11);
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(20.5,0.1,"PANITIA PENERIMAAN PESERTA PENDIDIK BARU (PPDB)",0,10,'C');
    $pdf->ln(0.5);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(19.3,0.3,"SMK NEGERI 2 KOTA BOGOR",0,10,'C');
    $pdf->ln(0.1);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(19.8,1.0,"Jl. Pangeran Sogiri No.404 Tanah Baru - Bogor Utara Kota Bogor 16154",0,10,'C');
    $pdf->ln(1.6);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(17.8,0.5,"KARTU PESERTA",0,0,'C');
    $pdf->ln(0.9);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(17.8,0.1,"TAHUN PELAJARAN 2022/2023",0,0,'C');
    $pdf->ln(0.9);
    // $pdf->SetFont('Arial','',12);
    // $pdf->Cell(4.0,2.5,"Tanggal:".date("D-d/m/Y"),0,0,'C');
    // $pdf->ln(1);
    $id = $this->UserModel->getUserId($this->session->userdata['nisn']);
    $jadwal = $this->UserModel->getPenutupan();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,1.8,"NISN                    :  ".$id->nisn,0,'L',false);
    $pdf->ln(1.3);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(2.1,0.5,"Nama Lengkap    :  ".$id->fullname,0,'L',false);
    $pdf->ln(0.9);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(1.2,0.2,"Jenis Kelamin      :  ".$id->gender,0,'L',false);
    $pdf->ln(0.7);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(1.8,0.3,"Asal Sekolah       :  ".$id->asal_sekolah,0,'L',false);
    $pdf->ln(2);
    $pdf->SetFont('Arial','',12);
    $pdf->SetLeftMargin(2.5);
    $pdf->Cell(8,1,'Jadwal Verifikasi Data',1,0,'C',0);
    $pdf->Cell(8,1,'Pengumuman Hasil Seleksi',1,0,'C',0);
    $pdf->ln(0);
    $pdf->Cell(8,3,$jadwal->verifikasi,1,0,'C',0);
    $pdf->Cell(8,3,$jadwal->hasil_seleksi,1,0,'C',0);
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->ln(0.5);
    $pdf->image('assets/img/smk2.jpg',1.2,0.8,3.4,3.0);
    $pdf->ln(1.2);
    $pdf->Line(1,4.3,20,4.3);
    $pdf->SetLineWidth(0.1);
    $pdf->Line(1,4.3,20,4.3);
    $pdf->ln(0.0);
   
    $pdf->Output();
  }
}