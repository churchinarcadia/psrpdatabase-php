<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\UserAccountType;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\UserAccountType Test Case
 */
class UserAccountTypeTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\UserAccountType
     */
    protected $UserAccountType;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->UserAccountType = new UserAccountType();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserAccountType);

        parent::tearDown();
    }
}
