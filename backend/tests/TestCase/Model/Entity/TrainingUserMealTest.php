<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\TrainingUserMeal;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\TrainingUserMeal Test Case
 */
class TrainingUserMealTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\TrainingUserMeal
     */
    protected $TrainingUserMeal;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->TrainingUserMeal = new TrainingUserMeal();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingUserMeal);

        parent::tearDown();
    }
}
