<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\TrainingUser;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\TrainingUser Test Case
 */
class TrainingUserTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\TrainingUser
     */
    protected $TrainingUser;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->TrainingUser = new TrainingUser();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingUser);

        parent::tearDown();
    }
}
