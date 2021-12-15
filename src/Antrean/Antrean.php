<?php
namespace Rajifafif\Bpjs\Antrean;

use Rajifafif\Bpjs\BpjsService;

class Antrean extends BpjsService
{
    public function getListTask($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/getlisttask',$data);
        return json_decode($response, true);
    }
    public function addAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/add', $data, $header);
        return json_decode($response, true);
    }
    public function cancelAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/batal', $data, $header);
        return json_decode($response, true);
    }
    public function updateWaktu($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/updatewaktu', $data, $header);
        return json_decode($response, true);
    }
    public function getListPoli()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/poli');
        return json_decode($response, true);
    }
    public function getListDokter()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/dokter');
        return json_decode($response, true);
    }
    
    public function getJadwalDokter($kodepoli, $tanggal)
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('jadwaldokter/kodepoli/'.$kodepoli.'/tanggal/'.$tanggal);
        return json_decode($response, true);
    }

    public function updateJadwalDokter($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('jadwaldokter/updatejadwaldokter', $data);
        return json_decode($response, true);
    }

    public function getDashboardPerTanggal($tanggal, $waktu)
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('/dashboard/waktutunggu/tanggal/'.$tanggal.'/waktu/'.$waktu);
        return json_decode($response, true);
    }

    public function getDashboardPerBulan($tahun, $bulan, $waktu)
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('/dashboard/waktutunggu/bulan/'.$bulan.'/tahun/'.$tahun.'/waktu/'.$waktu);
        return json_decode($response, true);
    }
}