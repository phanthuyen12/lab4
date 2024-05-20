<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenLoaisp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaisp')->insert([
            ['tenLoai' => 'sam sung', 'thuTu' => 1, 'anHien' => 1, 'urlHinh' => null],
            ['tenLoai' => 'htc', 'thuTu' => 2, 'anHien' => 1, 'urlHinh' => null],
            ['tenLoai' => 'Apple', 'thuTu' => 3, 'anHien' => 1, 'urlHinh' => null],
            ['tenLoai' => 'lg', 'thuTu' => 4, 'anHien' => 1, 'urlHinh' => null],
            ['tenLoai' => 'Motoreola', 'thuTu' => 5, 'anHien' => 1, 'urlHinh' => null],
            ['tenLoai' => 'mobel', 'thuTu' => 6, 'anHien' => 0, 'urlHinh' => null],
        ]);
        //
    }
}
