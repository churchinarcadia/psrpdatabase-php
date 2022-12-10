<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\TrainingMeal;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\TrainingMeal Test Case
 */
class TrainingMealTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\TrainingMeal
     */
    protected $TrainingMeal;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->TrainingMeal = new TrainingMeal();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingMeal);

        parent::tearDown();
    }
}
