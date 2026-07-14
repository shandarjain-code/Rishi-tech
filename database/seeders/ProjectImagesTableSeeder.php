<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_images')->delete();
        
        \DB::table('project_images')->insert(array (
            0 => 
            array (
                'id' => 6,
                'project_id' => 8,
                'path' => 'projects/01KXDHB1GF1DS6TQ4GJ2PSZGWC.png',
                'sort_order' => 1,
                'created_at' => '2026-07-13 10:46:05',
                'updated_at' => '2026-07-13 10:46:05',
            ),
            1 => 
            array (
                'id' => 7,
                'project_id' => 8,
                'path' => 'projects/01KXDHB1GKZJPVJXTYQ8ZN4MZ0.png',
                'sort_order' => 2,
                'created_at' => '2026-07-13 10:46:05',
                'updated_at' => '2026-07-13 10:46:05',
            ),
            2 => 
            array (
                'id' => 8,
                'project_id' => 8,
                'path' => 'projects/01KXDHB1GQ2PM29CZKC15XNKN9.png',
                'sort_order' => 3,
                'created_at' => '2026-07-13 10:46:05',
                'updated_at' => '2026-07-13 10:46:05',
            ),
            3 => 
            array (
                'id' => 9,
                'project_id' => 8,
                'path' => 'projects/01KXDHB1H3CVDXM1566GKD7YGE.png',
                'sort_order' => 4,
                'created_at' => '2026-07-13 10:46:05',
                'updated_at' => '2026-07-13 10:46:05',
            ),
            4 => 
            array (
                'id' => 10,
                'project_id' => 8,
                'path' => 'projects/01KXDHB1H7R4GZA87HG9VPSMB6.png',
                'sort_order' => 5,
                'created_at' => '2026-07-13 10:46:05',
                'updated_at' => '2026-07-13 10:46:05',
            ),
            5 => 
            array (
                'id' => 11,
                'project_id' => 8,
                'path' => 'projects/01KXDHB1HGMJTS4764WCESHSTJ.png',
                'sort_order' => 6,
                'created_at' => '2026-07-13 10:46:05',
                'updated_at' => '2026-07-13 10:46:05',
            ),
            6 => 
            array (
                'id' => 12,
                'project_id' => 8,
                'path' => 'projects/01KXDHB1HNWQTNH6P3VY4HVYK0.png',
                'sort_order' => 7,
                'created_at' => '2026-07-13 10:46:05',
                'updated_at' => '2026-07-13 10:46:05',
            ),
            7 => 
            array (
                'id' => 13,
                'project_id' => 10,
                'path' => 'projects/01KXDNTZ26B0AH91X2CCZ8BEGX.png',
                'sort_order' => 1,
                'created_at' => '2026-07-13 12:04:41',
                'updated_at' => '2026-07-13 12:04:41',
            ),
            8 => 
            array (
                'id' => 14,
                'project_id' => 10,
                'path' => 'projects/01KXDNTZ2BS3S11GM4P54GE5GP.png',
                'sort_order' => 2,
                'created_at' => '2026-07-13 12:04:41',
                'updated_at' => '2026-07-13 12:04:41',
            ),
            9 => 
            array (
                'id' => 15,
                'project_id' => 10,
                'path' => 'projects/01KXDNTZ2G82EPZVJQZTY1DB4P.png',
                'sort_order' => 3,
                'created_at' => '2026-07-13 12:04:41',
                'updated_at' => '2026-07-13 12:04:41',
            ),
            10 => 
            array (
                'id' => 16,
                'project_id' => 10,
                'path' => 'projects/01KXDNTZ2KBP030JX4VZNTFTDP.png',
                'sort_order' => 4,
                'created_at' => '2026-07-13 12:04:41',
                'updated_at' => '2026-07-13 12:04:41',
            ),
            11 => 
            array (
                'id' => 17,
                'project_id' => 10,
                'path' => 'projects/01KXDNTZ2PY55NACAN5Q820D3P.png',
                'sort_order' => 5,
                'created_at' => '2026-07-13 12:04:41',
                'updated_at' => '2026-07-13 12:04:41',
            ),
            12 => 
            array (
                'id' => 18,
                'project_id' => 10,
                'path' => 'projects/01KXDNTZ34A90ETAZCVH8KDQ9H.png',
                'sort_order' => 6,
                'created_at' => '2026-07-13 12:04:41',
                'updated_at' => '2026-07-13 12:04:41',
            ),
            13 => 
            array (
                'id' => 19,
                'project_id' => 10,
                'path' => 'projects/01KXDP2YMPW29DNJYPNVRWBZ3K.png',
                'sort_order' => 7,
                'created_at' => '2026-07-13 12:09:02',
                'updated_at' => '2026-07-13 12:09:02',
            ),
            14 => 
            array (
                'id' => 20,
                'project_id' => 10,
                'path' => 'projects/01KXDP2YMVXK635YSZEE13SRD4.png',
                'sort_order' => 8,
                'created_at' => '2026-07-13 12:09:02',
                'updated_at' => '2026-07-13 12:09:02',
            ),
            15 => 
            array (
                'id' => 21,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YBA2792PZZWAE7098T3.jpeg',
                'sort_order' => 1,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            16 => 
            array (
                'id' => 22,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YBEV5YCV81H7S7DW3VN.jpeg',
                'sort_order' => 2,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            17 => 
            array (
                'id' => 23,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YBHMM3TXRNVK49HWEHZ.jpeg',
                'sort_order' => 3,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            18 => 
            array (
                'id' => 24,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YBNM1M07XPWA5NQCHZB.jpeg',
                'sort_order' => 4,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            19 => 
            array (
                'id' => 25,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YBZVE3FR47ZRS99RC2Z.jpeg',
                'sort_order' => 5,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            20 => 
            array (
                'id' => 26,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YC7C5H1BYYY3WVVJR1G.jpeg',
                'sort_order' => 6,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            21 => 
            array (
                'id' => 27,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YCJPNEKKF4C1W6C1YS9.jpeg',
                'sort_order' => 7,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            22 => 
            array (
                'id' => 28,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YCNXT15RXASNE6Y34NR.jfif',
                'sort_order' => 8,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            23 => 
            array (
                'id' => 29,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YD0M3SWM9CBVMSZGTPK.jfif',
                'sort_order' => 9,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            24 => 
            array (
                'id' => 30,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YD8ZA5JVJA1WTYJJ59B.jfif',
                'sort_order' => 10,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            25 => 
            array (
                'id' => 31,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YDERVXNB0G0V1X1EP06.jfif',
                'sort_order' => 11,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            26 => 
            array (
                'id' => 32,
                'project_id' => 11,
                'path' => 'projects/01KXDR7YDSYAY338C5MNWKNZZ3.png',
                'sort_order' => 12,
                'created_at' => '2026-07-13 12:46:44',
                'updated_at' => '2026-07-13 12:46:44',
            ),
            27 => 
            array (
                'id' => 33,
                'project_id' => 12,
                'path' => 'projects/01KXDX3PDPMSRTP0EDK0Q2GDXH.png',
                'sort_order' => 1,
                'created_at' => '2026-07-13 14:11:47',
                'updated_at' => '2026-07-13 14:11:47',
            ),
            28 => 
            array (
                'id' => 34,
                'project_id' => 12,
                'path' => 'projects/01KXDX3PDXWGSB8NKCBV5YDEAV.png',
                'sort_order' => 2,
                'created_at' => '2026-07-13 14:11:47',
                'updated_at' => '2026-07-13 14:11:47',
            ),
            29 => 
            array (
                'id' => 35,
                'project_id' => 12,
                'path' => 'projects/01KXDX3PE1YPG7TNEXDZ0N1JF4.png',
                'sort_order' => 3,
                'created_at' => '2026-07-13 14:11:47',
                'updated_at' => '2026-07-13 14:11:47',
            ),
            30 => 
            array (
                'id' => 36,
                'project_id' => 12,
                'path' => 'projects/01KXDX3PED6EHT5DG3XJWJ55AB.png',
                'sort_order' => 4,
                'created_at' => '2026-07-13 14:11:47',
                'updated_at' => '2026-07-13 14:11:47',
            ),
            31 => 
            array (
                'id' => 37,
                'project_id' => 12,
                'path' => 'projects/01KXDX3PEG6KFMZH14YE53BWH3.png',
                'sort_order' => 5,
                'created_at' => '2026-07-13 14:11:47',
                'updated_at' => '2026-07-13 14:11:47',
            ),
            32 => 
            array (
                'id' => 38,
                'project_id' => 12,
                'path' => 'projects/01KXDX3PEKK9MBP6301NT7BSGZ.png',
                'sort_order' => 6,
                'created_at' => '2026-07-13 14:11:47',
                'updated_at' => '2026-07-13 14:11:47',
            ),
            33 => 
            array (
                'id' => 39,
                'project_id' => 13,
                'path' => 'projects/01KXDY1Q9KDEMWW0JK9F3HJAA4.png',
                'sort_order' => 1,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            34 => 
            array (
                'id' => 40,
                'project_id' => 13,
                'path' => 'projects/01KXDY1Q9RV8WQMPBV7HH8RPEZ.png',
                'sort_order' => 2,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            35 => 
            array (
                'id' => 41,
                'project_id' => 13,
                'path' => 'projects/01KXDY1Q9TQKQ8ZATV3D0QTWRS.png',
                'sort_order' => 3,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            36 => 
            array (
                'id' => 42,
                'project_id' => 13,
                'path' => 'projects/01KXDY1QA36PE09B3MWEMC2RYH.png',
                'sort_order' => 4,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            37 => 
            array (
                'id' => 43,
                'project_id' => 13,
                'path' => 'projects/01KXDY1QA8V082NBEN96HAXZPJ.png',
                'sort_order' => 5,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            38 => 
            array (
                'id' => 44,
                'project_id' => 13,
                'path' => 'projects/01KXDY1QACCPBSJ659988HGFC7.png',
                'sort_order' => 6,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            39 => 
            array (
                'id' => 45,
                'project_id' => 13,
                'path' => 'projects/01KXDY1QAQ7NJ18260WDXTD5TF.png',
                'sort_order' => 7,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            40 => 
            array (
                'id' => 46,
                'project_id' => 13,
                'path' => 'projects/01KXDY1QATSENRKGPHNA0QBHYM.png',
                'sort_order' => 8,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            41 => 
            array (
                'id' => 47,
                'project_id' => 13,
                'path' => 'projects/01KXDY1QAXFJQN0QEBNNX00FVG.png',
                'sort_order' => 9,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            42 => 
            array (
                'id' => 48,
                'project_id' => 13,
                'path' => 'projects/01KXDY1QB87DC0D0DJAYB4WE5B.png',
                'sort_order' => 10,
                'created_at' => '2026-07-13 14:28:11',
                'updated_at' => '2026-07-13 14:28:11',
            ),
            43 => 
            array (
                'id' => 49,
                'project_id' => 14,
                'path' => 'projects/01KXDZ21J0651CM1J5TB92GYF6.png',
                'sort_order' => 1,
                'created_at' => '2026-07-13 14:45:50',
                'updated_at' => '2026-07-13 14:45:50',
            ),
            44 => 
            array (
                'id' => 50,
                'project_id' => 14,
                'path' => 'projects/01KXDZ21J7NF6SVGJMS2KT2CDK.png',
                'sort_order' => 2,
                'created_at' => '2026-07-13 14:45:50',
                'updated_at' => '2026-07-13 14:45:50',
            ),
            45 => 
            array (
                'id' => 51,
                'project_id' => 14,
                'path' => 'projects/01KXDZ21JDH58MB5QRGF1CKY7S.png',
                'sort_order' => 3,
                'created_at' => '2026-07-13 14:45:50',
                'updated_at' => '2026-07-13 14:45:50',
            ),
            46 => 
            array (
                'id' => 52,
                'project_id' => 14,
                'path' => 'projects/01KXDZ21JMETQA4N5HS2E5T7S7.png',
                'sort_order' => 4,
                'created_at' => '2026-07-13 14:45:50',
                'updated_at' => '2026-07-13 14:45:50',
            ),
            47 => 
            array (
                'id' => 53,
                'project_id' => 14,
                'path' => 'projects/01KXDZ21JQWY68206J6QRDHMMX.png',
                'sort_order' => 5,
                'created_at' => '2026-07-13 14:45:50',
                'updated_at' => '2026-07-13 14:45:50',
            ),
        ));
        
        
    }
}