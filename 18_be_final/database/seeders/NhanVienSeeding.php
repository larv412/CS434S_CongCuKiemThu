<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();

        DB::table('nhan_viens')->truncate();

        DB::table('nhan_viens')->insert([
            [
                'email'             =>  'group10@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  'Group 10',
                'so_dien_thoai'     =>  '0905.111.333',
                'dia_chi'           =>  'Đà Nẵng',
                'tinh_trang'        =>  1,
                'id_quyen'          =>  1,
            ],
            [
                'email'             =>  'larv412@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  'Thai Nguyen',
                'so_dien_thoai'     =>  '03.888.24.999',
                'dia_chi'           =>  'Đà Nẵng',
                'tinh_trang'        =>  1,
                'id_quyen'          =>  1,
            ],
            [
                'email'             =>  'kkdn011@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  'Nguyen Thai',
                'so_dien_thoai'     =>  '0905111222',
                'dia_chi'           =>  'Đà Nẵng',
                'tinh_trang'        =>  1,
                'id_quyen'          =>  1,
            ],
        ]);
    }
}
