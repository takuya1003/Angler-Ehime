<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ports')->insert([
            [
                'id' => '1',
                'port_name' => '松前港',
                'latitude' => '33.7864084',
                'longitude' => '132.690312',
            ],
            [
                'id' => '2',
                'port_name' => '伊予港',
                'latitude' => '33.757240',
                'longitude' => '132.697191',
            ],
            [
                'id' => '3',
                'port_name' => '下灘/豊田漁港',
                'latitude' => '33.6511914',
                'longitude' => '132.5747725',
            ],
            [
                'id' => '4',
                'port_name' => '上灘漁港',
                'latitude' => '33.689212',
                'longitude' => '132.637100',
            ],
            [
                'id' => '5',
                'port_name' => '森漁港',
                'latitude' => '33.7451546',
                'longitude' => '132.6770919',
            ],
            [
                'id' => '6',
                'port_name' => '赤松漁港',
                'latitude' => '33.2383712',
                'longitude' => '132.5342644',
            ],
            [
                'id' => '7',
                'port_name' => '大浜漁港（宇和島）',
                'latitude' => '33.1445224',
                'longitude' => '132.3303835',
            ],
            [
                'id' => '8',
                'port_name' => '亀岡漁港',
                'latitude' => '34.0560022',
                'longitude' => '132.8674157',
            ],
            [
                'id' => '9',
                'port_name' => '今治港',
                'latitude' => '34.0686069',
                'longitude' => '133.00229',
            ],
            [
                'id' => '10',
                'port_name' => '森上港',
                'latitude' => '34.1253343',
                'longitude' => '132.9325882',
            ],
            [
                'id' => '11',
                'port_name' => '大角海浜公園',
                'latitude' => '34.1408212',
                'longitude' => '132.9339179',
            ],
            [
                'id' => '12',
                'port_name' => '富田新港',
                'latitude' => '34.0503966',
                'longitude' => '133.0248488',
            ],
            [
                'id' => '13',
                'port_name' => '寒川豊岡海浜公園',
                'latitude' => '33.9698466',
                'longitude' => '133.4879315',
            ],
            [
                'id' => '14',
                'port_name' => '寒川漁港',
                'latitude' => '33.9723254',
                'longitude' => '133.5113783',
            ],
            [
                'id' => '15',
                'port_name' => '川之江港',
                'latitude' => '34.0095314',
                'longitude' => '133.5617206',
            ],
            [
                'id' => '16',
                'port_name' => '長津漁港',
                'latitude' => '33.9742478',
                'longitude' => '133.469446',
            ],
            [
                'id' => '17',
                'port_name' => '蕪崎漁港',
                'latitude' => '33.9866439',
                'longitude' => '133.4278745',
            ],
            [
                'id' => '18',
                'port_name' => '高浜観光港',
                'latitude' => '33.8878777',
                'longitude' => '132.6996511',
            ],
            [
                'id' => '19',
                'port_name' => '今出港',
                'latitude' => '33.8141188',
                'longitude' => '132.6832614',
            ],
            [
                'id' => '19',
                'port_name' => '三津浜港',
                'latitude' => '33.865094',
                'longitude' => '132.7073049',
            ],
            [
                'id' => '20',
                'port_name' => '大浦漁港',
                'latitude' => '33.999571',
                'longitude' => '132.770086',
            ],
            [
                'id' => '21',
                'port_name' => '大可賀釣り公演',
                'latitude' => '33.8506622',
                'longitude' => '132.6945931',
            ],
            [
                'id' => '22',
                'port_name' => '土手内漁港',
                'latitude' => '33.9705956',
                'longitude' => '132.7685375',
            ],
            [
                'id' => '23',
                'port_name' => '北条港',
                'latitude' => '33.8321566',
                'longitude' => '132.5623677',
            ],
            [
                'id' => '24',
                'port_name' => '蕪崎漁港',
                'latitude' => '33.8956092',
                'longitude' => '132.7329109',
            ],
            [
                'id' => '25',
                'port_name' => '和気漁港',
                'latitude' => '33.9027779',
                'longitude' => '132.7307707',
            ],
            [
                'id' => '26',
                'port_name' => '垣生漁港（新居浜）',
                'latitude' => '33.9916814',
                'longitude' => '133.3167516',
            ],
            [
                'id' => '27',
                'port_name' => '伊方港',
                'latitude' => '33.4858559',
                'longitude' => '132.3466338',
            ],
            [
                'id' => '28',
                'port_name' => '井野浦',
                'latitude' => '33.372443',
                'longitude' => '132.1073334',
            ],
            [
                'id' => '29',
                'port_name' => '三机港',
                'latitude' => '33.4496634',
                'longitude' => '132.2404425',
            ],
            [
                'id' => '30',
                'port_name' => '大江漁港',
                'latitude' => '33.450035',
                'longitude' => '132.225393',
            ],
            [
                'id' => '31',
                'port_name' => '鳥津漁港',
                'latitude' => '33.4796558',
                'longitude' => '132.2844484',
            ],
            [
                'id' => '32',
                'port_name' => '豊之浦漁港',
                'latitude' => '33.4702415',
                'longitude' => '132.3229401',
            ],
            [
                'id' => '33',
                'port_name' => 'あけはまシーサイドパークの釣り桟橋',
                'latitude' => '33.3128346',
                'longitude' => '132.4417476',
            ],
            [
                'id' => '34',
                'port_name' => '有網代の波止',
                'latitude' => '33.374308',
                'longitude' => '132.412692',
            ],
            [
                'id' => '35',
                'port_name' => '沖浦漁港',
                'latitude' => '33.611163',
                'longitude' => '132.475347',
            ],
            [
                'id' => '36',
                'port_name' => '櫛生漁港',
                'latitude' => '33.5733102',
                'longitude' => '132.4368308',
            ],
            [
                'id' => '37',
                'port_name' => '出海漁港',
                'latitude' => '33.558701',
                'longitude' => '132.432627',
            ],
            [
                'id' => '38',
                'port_name' => '長浜新港',
                'latitude' => '33.6176581',
                'longitude' => '132.4792955',
            ],
            [
                'id' => '39',
                'port_name' => 'シーロード八幡浜',
                'latitude' => '33.4589338',
                'longitude' => '132.387962',
            ],
            [
                'id' => '40',
                'port_name' => '喜木津漁港',
                'latitude' => '33.528486',
                'longitude' => '132.387372',
            ],
            [
                'id' => '41',
                'port_name' => '向灘の波止',
                'latitude' => '33.457841',
                'longitude' => '132.406739',
            ],
        ]);
    }
}
