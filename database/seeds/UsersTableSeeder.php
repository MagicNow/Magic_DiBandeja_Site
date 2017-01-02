<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2011-03-12 05:02:39',
                'updated_at' => '2013-08-15 18:02:44',
                'login' => 'juliano',
                'crypted_password' => '6e3728ce62ac4ad4ff4f3bd585c7760183f28ac973528e6042d19dcc5cb0acc5c4723bb5a6e58cd3a918f5b2fcabd23be1d6027a78a232ae29d88b5052bbbcf0',
                'password_salt' => 'YlEAdnHkO8tHp6BikmCB',
                'persistence_token' => '201a548516ff6ade0507d1350dd64ba1b692d9d861b44cae82d48e9bbdb9e0f95b1559130ef1268c3b5ce5316c3aaf6f141b85a2579b42f88b9f5da0ee4acac7',
                'login_count' => 210,
                'last_request_at' => '2013-08-15 18:02:44',
                'last_login_at' => '2013-07-07 21:25:29',
                'current_login_at' => '2013-08-15 14:44:22',
                'last_login_ip' => '177.62.126.6',
                'current_login_ip' => '189.121.201.233',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2011-12-12 20:19:08',
                'updated_at' => '2013-01-31 21:36:36',
                'login' => 'lp360',
                'crypted_password' => '05f9575a7b48e0c26a3c13fd52a0f5699eea3f6e1b9261f92859e13587a541b9a3c4b0e4bcb902cb90c1439801c70b5c672a498ddc5cccdb86a8f814c4c46695',
                'password_salt' => 'IqdwzhBR1kCvQQukjCVk',
                'persistence_token' => '0ad0095b5a41992cd14e6febc328d44ea33a687abda8d69dd4fdd2139053a6129d6c13734d10f871ec0681628b776888edbd57ea54828acacbaa7b75d1a85ec4',
                'login_count' => 37,
                'last_request_at' => '2013-01-31 21:36:36',
                'last_login_at' => '2013-01-31 18:29:00',
                'current_login_at' => '2013-01-31 18:35:27',
                'last_login_ip' => '190.242.128.50',
                'current_login_ip' => '189.126.197.26',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2013-07-20 03:53:18',
                'updated_at' => '2013-07-20 03:56:35',
                'login' => 'graziellaluna',
                'crypted_password' => '7f9ef47b3e3ebf585d2ca66416699105dede1471247bec836b09727fa32c4417bf6c39a8c20700bd55c20b0a472eb0f653bc3ba7e4a149fd05fbd23de6fb2b1c',
                'password_salt' => 'CN9jDsl462fMgbW6wQCM',
                'persistence_token' => 'bbc3c9a9e12c1fd9a8fa294c88611b11e8b9bef245f89eeef65d772c9d39db6d4b5f790fc95efa20ee67f352c90e0f16f74027159f7544a908f01c566aad8e18',
                'login_count' => 1,
                'last_request_at' => '2013-07-20 03:56:35',
                'last_login_at' => NULL,
                'current_login_at' => '2013-07-20 03:53:27',
                'last_login_ip' => NULL,
                'current_login_ip' => '177.97.155.223',
            ),
        ));
        
        
    }
}