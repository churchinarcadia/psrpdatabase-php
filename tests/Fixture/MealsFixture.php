<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MealsFixture
 */
class MealsFixture extends TestFixture
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
                'day' => 'Lorem ip',
                'meal' => 'Lorem i',
                'creator' => 1,
                'created' => '2021-12-10 10:33:54',
                'modifier' => 1,
                'modified' => '2021-12-10 10:33:54',
            ],
        ];
        parent::init();
    }
}
