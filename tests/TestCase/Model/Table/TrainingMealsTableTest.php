<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingMealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingMealsTable Test Case
 */
class TrainingMealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingMealsTable
     */
    protected $TrainingMealsTable;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TrainingMeals',
        'app.Trainings',
        'app.Meals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TrainingMeals') ? [] : ['className' => TrainingMealsTable::class];
        $this->TrainingMealsTable = $this->getTableLocator()->get('TrainingMeals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingMealsTable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TrainingMealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TrainingMealsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
