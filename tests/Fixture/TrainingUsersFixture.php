<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrainingUsersFixture
 */
class TrainingUsersFixture extends TestFixture
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
                'user_id' => 1,
                'registration_complete' => 1,
                'process_step' => 1,
                'serving_one_id' => 1,
                'cash_paid' => 1,
                'check_paid' => 1,
                'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'creator' => 1,
                'created' => '2021-12-10 10:45:52',
                'modifier' => 1,
                'modified' => '2021-12-10 10:45:52',
            ],
        ];
        parent::init();
    }
}
