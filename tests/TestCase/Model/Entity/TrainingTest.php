<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\Training;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\Training Test Case
 */
class TrainingTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\Training
     */
    protected $Training;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->Training = new Training();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Training);

        parent::tearDown();
    }
}
