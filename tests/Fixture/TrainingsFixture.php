<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrainingsFixture
 */
class TrainingsFixture extends TestFixture
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
                'year' => 'Lorem ipsum dolor sit amet',
                'month' => 'Lorem ip',
                'start_date' => '2021-12-10',
                'end_date' => '2021-12-10',
                'breakfast_cost' => 1,
                'lunch_cost' => 1,
                'dinner_cost' => 1,
                'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'creator' => 1,
                'created' => '2021-12-10 10:46:04',
                'modifier' => 1,
                'modified' => '2021-12-10 10:46:04',
            ],
        ];
        parent::init();
    }
}
