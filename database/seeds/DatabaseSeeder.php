<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('truong');
        $this->call('donvi');
        $this->call('tieuchi');
        $this->call('daihan');
            $this->call('nganhan');
            $this->call('account');
        // $this->call(UserSeeder::class);
    }
}
class truong extends Seeder{
    public function run()
    {
        foreach ($this->ma_truong as $ma=>$ten)
            DB::table('truong')->insert(
                [
                    'id' => $ma,
                    'ten' => $ten,
                    'logo' => $ma . '.png',
                ]
            );
        }

}


class donvi extends Seeder{
    public function run()
    {
        foreach ($this->donvi as $dv)
            DB::table('donvi')->insert(
                [

                    'ten' => $dv,

                ]
            );
    }

}

class tieuchi extends Seeder{
    public function run()
    {
        foreach ($this->tieuchi as $tc => $mt)
            DB::table('tieuchi')->insert(
                [

                    'ten' => $tc,
                    'moTa'=>$mt[0],
                    'ma_dv'=>$mt[1],

                ]
            );
    }

}


class daihan extends Seeder{
    public function run()
    {
        $nam = array(2025, 2030);
        foreach ($this->ma_truong as $key => $value) {
            for($j=1; $j<=2;$j++) {
                $a = rand(100, 100000);
                $b = $a + rand(0, 1000);
                DB::table('daihan')->insert(
                    [
                        'ma_tc' => $j,
                        'nam' => $nam[$j - 1],
                        'xong' => $a,
                        'tong' => $b,
                        'ma_truong'=>$key,
                    ]
                );
            }
        }
    }

}



class nganhan extends Seeder{
    public function run()
    {
        $nam = 2025;
        for($i=1; $i<=4;$i++){
            if($i%2==0)
                $nam = 2024;
            else
                $nam = 2029;
            for($j=1; $j<=5;$j++) {
                $a = rand(10, 100000);
                $b = $a + rand(1000, 100000);
                DB::table('nganhan')->insert(
                    [
                        'ma_tc' => $i,
                        'nam' => $j+$nam,
                        'xong' => $a,
                        'tong' => $b,
                    ]
                );
            }

        }
    }

}

class account extends Seeder{
    public function run()
    {
        $names = array('son','hanh','xuanAnh','long','dung');
        foreach ($names as $name)
            DB::table('account')->insert(
                [
                    'password'=>bcrypt('140799'),
                    'email'=>$name.'1999@gmail.com',
                    'name'=>$name,
                     'ma_truong'=>'hus'
                ]
            );
    }

}

