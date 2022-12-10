<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingUserMealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingUserMealsTable Test Case
 */
class TrainingUserMealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingUserMealsTable
     */
    protected $TrainingUserMealsTable;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TrainingUserMeals',
        'app.TrainingUsers',
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
        $config = $this->getTableLocator()->exists('TrainingUserMeals') ? [] : ['className' => TrainingUserMealsTable::class];
        $this->TrainingUserMealsTable = $this->getTableLocator()->get('TrainingUserMeals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingUserMealsTable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TrainingUserMealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TrainingUserMealsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
