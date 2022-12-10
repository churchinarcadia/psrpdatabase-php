<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrainingMeal Entity
 *
 * @property int $id
 * @property int $training_id
 * @property int $meal_id
 * @property int $cost
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Training $training
 * @property \App\Model\Entity\Meal $meal
 */
class TrainingMeal extends Entity
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
        'training_id' => true,
        'meal_id' => true,
        'cost' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'training' => true,
        'meal' => true,
    ];
}
