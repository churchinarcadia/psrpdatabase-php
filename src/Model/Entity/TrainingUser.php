<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrainingUser Entity
 *
 * @property int $id
 * @property int $training_id
 * @property int $user_id
 * @property bool $registration_complete
 * @property int|null $process_step
 * @property int|null $serving_one_id
 * @property int|null $cash_paid
 * @property int|null $check_paid
 * @property string|null $notes
 * @property int|null $creator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modifier
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Training $training
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\TrainingUserMeal[] $training_user_meals
 */
class TrainingUser extends Entity
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
        'user_id' => true,
        'registration_complete' => true,
        'process_step' => true,
        'serving_one_id' => true,
        'cash_paid' => true,
        'check_paid' => true,
        'notes' => true,
        'creator' => true,
        'created' => true,
        'modifier' => true,
        'modified' => true,
        'training' => true,
        'user' => true,
        'training_user_meals' => true,
    ];
}
