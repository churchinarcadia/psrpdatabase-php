<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\TrainingUserMeal;
use Authorization\IdentityInterface;

/**
 * TrainingUserMeal policy
 */
class TrainingUserMealPolicy
{
    /**
     * Check if $user can add TrainingUserMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUserMeal $trainingUserMeal
     * @return bool
     */
    public function canAdd(IdentityInterface $user, TrainingUserMeal $trainingUserMeal)
    {
    }

    /**
     * Check if $user can edit TrainingUserMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUserMeal $trainingUserMeal
     * @return bool
     */
    public function canEdit(IdentityInterface $user, TrainingUserMeal $trainingUserMeal)
    {
    }

    /**
     * Check if $user can delete TrainingUserMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUserMeal $trainingUserMeal
     * @return bool
     */
    public function canDelete(IdentityInterface $user, TrainingUserMeal $trainingUserMeal)
    {
    }

    /**
     * Check if $user can view TrainingUserMeal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUserMeal $trainingUserMeal
     * @return bool
     */
    public function canView(IdentityInterface $user, TrainingUserMeal $trainingUserMeal)
    {
    }
}
