<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MealsTable Test Case
 */
class MealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MealsTable
     */
    protected $MealsTable;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Meals',
        'app.Trainings',
        'app.TrainingsUsers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Meals') ? [] : ['className' => MealsTable::class];
        $this->MealsTable = $this->getTableLocator()->get('Meals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MealsTable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
