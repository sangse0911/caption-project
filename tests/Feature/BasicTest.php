<?php

namespace Tests\Feature;

use Session;
use Tests\TestCase;

class BasicTest extends TestCase
{

    /**
     * @test
     * @return [type] [description]
     */
    public function getAdminPage()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return [type] [description]
     */

    public function testLoginPost()
    {
        Session::start();
        $response = $this->call('POST', '/admin/login', [
            'email' => 'admin6@gmail.com',
            'password' => bcrypt('123'),
            '_token' => csrf_token(),
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('admin.login.dangnhapquantri', $response->original->name());
    }

    /**
     * @test
     * @return [type] [description]
     */
    public function testShowBook()
    {
        $response = $this->get('/books');
        $response->assertStatus(200);
    }

    /**
     * @test
     * @return [type] [description]
     */
    public function testBookById()
    {

        $response = $this->get('/book/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     * @return [type] [description]
     */
    public function testIsLoggedInAdmin()
    {
        $this->visit('/admin/login')
            ->see('Login');
    }
}
