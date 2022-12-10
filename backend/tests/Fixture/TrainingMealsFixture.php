<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrainingMealsFixture
 */
class TrainingMealsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'training_id' => 1,
                'meal_id' => 1,
                'cost' => 1,
                'creator' => 1,
                'created' => '2021-12-10 10:45:38',
                'modifier' => 1,
                'modified' => '2021-12-10 10:45:38',
            ],
        ];
        parent::init();
    }
}
