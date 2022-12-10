<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\AccountType;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\AccountType Test Case
 */
class AccountTypeTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\AccountType
     */
    protected $AccountType;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->AccountType = new AccountType();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AccountType);

        parent::tearDown();
    }
}
