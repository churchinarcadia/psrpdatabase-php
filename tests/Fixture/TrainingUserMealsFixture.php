<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrainingUserMealsFixture
 */
class TrainingUserMealsFixture extends TestFixture
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
                'training_user_id' => 1,
                'meal_id' => 1,
                'creator' => 1,
                'created' => '2021-12-10 10:45:48',
                'modifier' => 1,
                'modified' => '2021-12-10 10:45:48',
            ],
        ];
        parent::init();
    }
}
