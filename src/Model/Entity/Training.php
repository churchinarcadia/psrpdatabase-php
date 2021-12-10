<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Training Entity
 *
 * @property int $id
 * @property string $year
 * @property string $month
 * @property \Cake\I18n\FrozenDate|null $start_date
 * @property \Cake\I18n\FrozenDate|null $end_date
 * @property int|null $breakfast_cost
 * @property int|null $lunch_cost
 * @property int|null $dinner_cost
 * @property string|null $notes
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Meal[] $meals
 * @property \App\Model\Entity\User[] $users
 */
class Training extends Entity
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
        'year' => true,
        'month' => true,
        'start_date' => true,
        'end_date' => true,
        'breakfast_cost' => true,
        'lunch_cost' => true,
        'dinner_cost' => true,
        'notes' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'meals' => true,
        'users' => true,
    ];
}
