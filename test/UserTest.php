<?php
/**
 * Created by PhpStorm.
 * User: settermjd
 * Date: 11.10.17
 * Time: 14:56
 */

namespace SimpleEntitiesTest;

use PHPUnit\Framework\TestCase;
use SimpleEntities\User;

class UserTest extends TestCase
{
    public function testGetNameReturnsNullIfNameIsNotSet()
    {
        $user = new User();
        $this->assertSame(null, $user->getName(), 'Name should be null');
    }

    public function testSetNameCanSetTheNamePropertyCorrectly()
    {
        $user = new User();
        $user->setName('Matthew');
        $this->assertSame('Matthew', $user->getName(), 'Name should be "Matthew"');
    }
}
