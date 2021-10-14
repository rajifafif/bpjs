# BPJS Kesehatan Indonesia

This Package forked from mbahmario/bpjs which is clone from  nsulistiyawan/bpjs under maintenance.

This package is a wrapper of :ambulance: BPJS VClaim Web Service
https://dvlp.bpjs-kesehatan.go.id:8888/trust-mark/portal.html

Note (2021-10-14) : BPJS haven't Implement user_key so it cannot be tested

#### Installation :fire:

`composer require rajifafif/bpjs`

#### Example Usage :confetti_ball:
```php
//use your own bpjs config
$vclaim_conf = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'https://apijkn-dev.bpjs-kesehatan.go.id',
    'service_name' => 'vclaim-rest-dev',
    'user_key' => 'd795b04f4a72d74fae727be9da0xxxxx'
];

// use Referensi service
// https://dvlp.bpjs-kesehatan.go.id:8888/trust-mark/main.html#/mitra/katalog/vclaim/referensi - Propinsi

$referensi = new Rajifafif\Bpjs\VClaim\Referensi($vclaim_conf);
var_dump($referensi->propinsi());

```


#### Supported Services (WIP) :rocket:

- [x] Referensi
- [x] Peserta
- [x] SEP
- [x] Rujukan
- [x] Lembar Pengajuan Klaim
- [x] Monitoring
- [x] Aplicare


#### Contributions :ok_hand:
Your contribution is always welcome!
