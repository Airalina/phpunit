<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
       // $email = 'a@admin.com';
       // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);

        $result = Email::validate('i@admin.com');   
        $this->assertTrue($result);

        $result = Email::validate('a@admin.com');   
        $this->assertTrue($result);
    }
}
