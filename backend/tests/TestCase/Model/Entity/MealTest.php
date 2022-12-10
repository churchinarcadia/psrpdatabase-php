<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Entity;

use App\Model\Entity\Meal;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Entity\Meal Test Case
 */
class MealTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Entity\Meal
     */
    protected $Meal;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->Meal = new Meal();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Meal);

        parent::tearDown();
    }
}
