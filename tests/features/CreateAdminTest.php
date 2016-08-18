<?php


class CreateAdminTest extends TestCase
{
    public function testCreateAdmin()
    {
        config(['auth.providers.users.model' => 'User']);

        $mock = \Mockery::mock('alias:User');
        $mock->shouldReceive('create')->with(Mockery::on(function ($data) {
            return $data['email'] == 'jeroennoten@me.com'
            and $data['name'] == 'Jeroen Noten'
            and password_verify('secret', $data['password']);
        }))->once();

        $this->artisan('create:admin', [
            'email' => 'jeroennoten@me.com',
            'password' => 'secret',
            '--name' => 'Jeroen Noten'
        ]);
    }
}
