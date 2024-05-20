<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ThanhvienSeender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $firstNames = ['Nguyễn', 'Trần', 'Lê', 'Phạm', 'Hoàng'];
        $lastNames = ['Văn', 'Thị', 'Minh', 'Quốc', 'Anh'];
        $middleNames = ['Thanh', 'Hữu', 'Thị', 'Văn', 'Như'];

        for ($i = 0; $i < 100; $i++) {
            $fullName = $firstNames[array_rand($firstNames)] . ' ' .
                        $middleNames[array_rand($middleNames)] . ' ' .
                        $lastNames[array_rand($lastNames)];

            $email = strtolower(str_replace(' ', '', $fullName)) . $i . '@gmail.com';

            $password = Hash::make('thuyen');

            DB::table('thanhvien')->insert([
                'hoTen' => $fullName,
                'password' => $password,
                'email' => $email,
                'active' => true,
                'idGroup' => 0, // Nếu có hệ thống nhóm thành viên, bạn có thể thay đổi giá trị này
            ]);
        }
    }
}
