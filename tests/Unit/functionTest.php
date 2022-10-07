<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class functionTest extends TestCase
{
    public function testEmail()
    {
        $result = validate_email('a@a.com');
        $this->assertTrue($result);

        $result = validate_email('a@@a.com');
        $this->assertFalse($result);
    }
}
