<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Station Seed');
        
        $a11 = \App\Station::updateOrCreate([
            'code' => 'KJ1',
            'name' => 'Gombak',
            'lat' => 3.2310911,
            'lng' => 101.7240718,
            'status' => 'active'
        ]);
        
        $a10 = \App\Station::updateOrCreate([
            'code' => 'KJ2',
            'name' => 'Taman Melati',
            'lat' => 3.2195325,
            'lng' => 101.7219271,
            'status' => 'active'
        ]);

        $a9 = \App\Station::updateOrCreate([
            'code' => 'KJ3',
            'name' => 'Wangsa Maju',
            'lat' => 3.2056186,
            'lng' => 101.731578,
            'status' => 'active'
        ]);

        $a8 = \App\Station::updateOrCreate([
            'code' => 'KJ4',
            'name' => 'Sri Rampai',
            'lat' =>3.1987460,
            'lng' =>101.7371078,
            'status' => 'active'
        ]);

        $a7 = \App\Station::updateOrCreate([
            'code' => 'KJ5',
            'name' => 'Setiawangsa',
            'lat' => 3.1756008,
            'lng' => 101.7357087,
            'status' => 'active'
        ]);

        $a6 = \App\Station::updateOrCreate([
            'code' => 'KJ6',
            'name' => 'Jelatek',
            'lat' => 3.1673454,
            'lng' => 101.7331667,
            'status' => 'active'
        ]);

        $a5 = \App\Station::updateOrCreate([
            'code' => 'KJ7',
            'name' => 'Dato Keramat',
            'lat' => 3.1652564,
            'lng' => 101.727692,
            'status' => 'active'
        ]);

        $a4 = \App\Station::updateOrCreate([
            'code' => 'KJ8',
            'name' => 'Damai',
            'lat' => 3.1644554,
            'lng' => 101.7233843,
            'status' => 'active'
        ]);

        $a3 = \App\Station::updateOrCreate([
            'code' => 'KJ9',
            'name' => 'Ampang Park',
            'lat' => 3.1599192,
            'lng' => 101.7184977,
            'status' => 'active'
        ]);

        $a2 = \App\Station::updateOrCreate([
            'code' => 'KJ10',
            'name' => 'KLCC',
            'lat' => 3.158731,
            'lng' => 101.7128838,
            'status' => 'active'
        ]);

        $a1 = \App\Station::updateOrCreate([
            'code' => 'KJ11',
            'name' => 'Kampung Baru',
            'lat' => 3.1612991,
            'lng' => 101.7062438,
            'status' => 'active'
        ]);

        $z = \App\Station::updateOrCreate([
            'code' => 'KJ12',
            'name' => 'Dang Wangi',
            'lat' => 3.1560723,
            'lng' => 101.7023061,
            'status' => 'active'
        ]);

        $y = \App\Station::updateOrCreate([
            'code' => 'KJ13',
            'name' => 'Masjid Jamek',
            'lat' => 3.1491087,
            'lng' => 101.6961444,
            'status' => 'active'
        ]);

        $x = \App\Station::updateOrCreate([
            'code' => 'KJ14',
            'name' => 'Pasar Seni',
            'lat' => 3.1424541,
            'lng' => 101.6952375,
            'status' => 'active'
        ]);

        $w = \App\Station::updateOrCreate([
            'code' => 'KJ15',
            'name' => 'KL Sentral',
            'lat' => 3.1343439,
            'lng' => 101.6841538,
            'status' => 'active'
        ]);
        
        $v = \App\Station::updateOrCreate([
            'code' => 'KJ16',
            'name' => 'Bangsar',
            'lat' => 3.1348741,
            'lng' => 101.6843523,
            'status' => 'active'
        ]);

        $u = \App\Station::updateOrCreate([
            'code' => 'KJ17',
            'name' => 'Abdullah Hukum',
            'lat' => 3.1188009,
            'lng' => 101.6706853,
            'status' => 'active'
        ]);

        $t = \App\Station::updateOrCreate([
            'code' => 'KJ18',
            'name' => 'Kerinchi',
            'lat' => 3.115515,
            'lng' => 101.6679396,
            'status' => 'active'
        ]);

        $s = \App\Station::updateOrCreate([
            'code' => 'KJ19',
            'name' => 'Universiti',
            'lat' => 3.1146312,
            'lng' => 101.6614873,
            'status' => 'active'
        ]);

        $r = \App\Station::updateOrCreate([
            'code' => 'KJ20',
            'name' => 'Taman Jaya',
            'lat' => 3.1035699,
            'lng' => 101.6439934,
            'status' => 'active'
        ]);

        $q = \App\Station::updateOrCreate([
            'code' => 'KJ21',
            'name' => 'Asia Jaya',
            'lat' => 3.1035671,
            'lng' => 101.6374148,
            'status' => 'active'
        ]);

        $p = \App\Station::updateOrCreate([
            'code' => 'KJ22',
            'name' => 'Taman Paramount',
            'lat' => 3.1047005,
            'lng' => 101.6221549,
            'status' => 'active'
        ]);

        $o = \App\Station::updateOrCreate([
            'code' => 'KJ23',
            'name' => 'Taman Bahagia',
            'lat' => 3.1049694,
            'lng' => 101.6219979,
            'status' => 'active'
        ]);

        $n = \App\Station::updateOrCreate([
            'code' => 'KJ24',
            'name' => 'Kelana Jaya',
            'lat' => 3.1127393,
            'lng' => 101.6020142,
            'status' => 'active'
        ]);

        $m = \App\Station::updateOrCreate([
            'code' => 'KJ25',
            'name' => 'Lembah Subang',
            'lat' => 3.1128708,
            'lng' => 101.6029917,
            'status' => 'active'
        ]);

        $l = \App\Station::updateOrCreate([
            'code' => 'KJ26',
            'name' => 'Ara Damansara',
            'lat' => 3.1128708,
            'lng' => 101.5839035,
            'status' => 'active'
        ]);

        $k = \App\Station::updateOrCreate([
            'code' => 'KJ27',
            'name' => 'Glenmarie',
            'lat' => 3.095755,
            'lng' => 101.5901138,
            'status' => 'active'
        ]);

        $j = \App\Station::updateOrCreate([
            'code' => 'KJ28',
            'name' => 'Subang Jaya',
            'lat' => 3.0846283,
            'lng' => 101.5870202,
            'status' => 'active'
        ]);

        $i = \App\Station::updateOrCreate([
            'code' => 'KJ29',
            'name' => 'SS 15',
            'lat' => 3.0757582,
            'lng' => 101.5858607,
            'status' => 'active'
        ]);

        $h = \App\Station::updateOrCreate([
            'code' => 'KJ30',
            'name' => 'SS 18',
            'lat' => 3.067182,
            'lng' => 101.5837979,
            'status' => 'active'
        ]);

        $g = \App\Station::updateOrCreate([
            'code' => 'KJ31',
            'name' => 'USJ 7',
            'lat' => 3.055308,
            'lng' => 101.5914456,
            'status' => 'active'
        ]);

        $f = \App\Station::updateOrCreate([
            'code' => 'KJ32',
            'name' => 'Taipan',
            'lat' =>3.0477833,
            'lng' => 101.5897468,
            'status' => 'active'
        ]);

        $e = \App\Station::updateOrCreate([
            'code' => 'KJ33',
            'name' => 'Wawasan',
            'lat' => 3.0349689,
            'lng' => 101.5879903,
            'status' => 'active'
        ]);

        $d = \App\Station::updateOrCreate([
            'code' => 'KJ34',
            'name' => 'USJ 21',
            'lat' => 3.0300299,
            'lng' =>101.5813276,
            'status' => 'active'
        ]);

        $c = \App\Station::updateOrCreate([
            'code' => 'KJ35',
            'name' => 'Alam Megah',
            'lat' => 3.0232212,
            'lng' => 101.5702121,
            'status' => 'active'
        ]);

        $b = \App\Station::updateOrCreate([
            'code' => 'KJ36',
            'name' => 'Subang Alam',
            'lat' => 3.009421,
            'lng' => 101.5700923,
            'status' => 'active'
        ]);

        $a = \App\Station::updateOrCreate([
            'code' => 'KJ37',
            'name' => 'Putra Heights',
            'lat' => 2.9954116,
            'lng' => 101.575159,
            'status' => 'active'            
        ]);
        
    }
}
