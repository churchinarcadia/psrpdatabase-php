<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrainingUserMeal Entity
 *
 * @property int $id
 * @property int $training_user_id
 * @property int $meal_id
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\TrainingUser $training_user
 * @property \App\Model\Entity\Meal $meal
 */
class TrainingUserMeal extends Entity
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
        'training_user_id' => true,
        'meal_id' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'training_user' => true,
        'meal' => true,
    ];
}
