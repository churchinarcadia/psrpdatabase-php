<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Meal Entity
 *
 * @property int $id
 * @property string $day
 * @property string $meal
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Training[] $trainings
 * @property \App\Model\Entity\TrainingsUser[] $trainings_users
 */
class Meal extends Entity
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
        'day' => true,
        'meal' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'trainings' => true,
        'trainings_users' => true,
    ];
}
