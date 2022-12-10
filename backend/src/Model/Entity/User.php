<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $chinese_name
 * @property string|null $gender
 * @property string|null $locality
 * @property string|null $cell_phone
 * @property string|null $email
 * @property string|null $line
 * @property string|null $wechat
 * @property string|null $language
 * @property int|null $country_code
 * @property string|null $password
 * @property \Cake\I18n\FrozenTime|null $last_login
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\TrainingUser[] $training_users
 * @property \App\Model\Entity\UserAccountType[] $user_account_types
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'chinese_name' => true,
        'gender' => true,
        'locality' => true,
        'cell_phone' => true,
        'email' => true,
        'line' => true,
        'wechat' => true,
        'language' => true,
        'country_code' => true,
        'password' => true,
        'last_login' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'training_users' => true,
        'user_account_types' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
