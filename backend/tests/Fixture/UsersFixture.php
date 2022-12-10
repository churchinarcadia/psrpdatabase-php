<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'chinese_name' => 'Lore',
                'gender' => 'L',
                'locality' => 'Lorem ipsum dolor sit amet',
                'cell_phone' => 'Lorem ipsum d',
                'email' => 'Lorem ipsum dolor sit amet',
                'line' => 'Lorem ipsum dolor ',
                'wechat' => 'Lorem ipsum dolor ',
                'language' => 'Lorem ipsum d',
                'country_code' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'last_login' => '2021-12-10 10:46:20',
                'created' => '2021-12-10 10:46:20',
                'modifier' => 1,
                'modified' => '2021-12-10 10:46:20',
            ],
        ];
        parent::init();
    }
}
