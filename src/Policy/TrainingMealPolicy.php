<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\TrainingMeal;
use Authorization\IdentityInterface;

/**
 * TrainingMeal policy
 */
class TrainingMealPolicy
{
    /**
     * Check if $user can add TrainingMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingMeal $trainingMeal
     * @return bool
     */
    public function canAdd(IdentityInterface $user, TrainingMeal $trainingMeal)
    {
    }

    /**
     * Check if $user can edit TrainingMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingMeal $trainingMeal
     * @return bool
     */
    public function canEdit(IdentityInterface $user, TrainingMeal $trainingMeal)
    {
    }

    /**
     * Check if $user can delete TrainingMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingMeal $trainingMeal
     * @return bool
     */
    public function canDelete(IdentityInterface $user, TrainingMeal $trainingMeal)
    {
    }

    /**
     * Check if $user can view TrainingMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingMeal $trainingMeal
     * @return bool
     */
    public function canView(IdentityInterface $user, TrainingMeal $trainingMeal)
    {
    }
}
