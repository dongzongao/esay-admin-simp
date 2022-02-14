<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
class AdminControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/admin');
        $response->assertStatus(200);
    }


    public function test_store()
    {
        $re = $this->post('/api/admin',
            [
                'name' => 'dongzongao',
                'email' =>'17639374013@qq.com',
                'password' => "123456",
                'ip' => request()->ip(),
                'login_num' => 1
            ]
        );
        $re->assertStatus(200);
    }
}
