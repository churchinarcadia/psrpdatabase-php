<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\TrainingUser;
use Authorization\IdentityInterface;

/**
 * TrainingUser policy
 */
class TrainingUserPolicy
{
    /**
     * Check if $user can add TrainingUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUser $trainingUser
     * @return bool
     */
    public function canAdd(IdentityInterface $user, TrainingUser $trainingUser)
    {
    }

    /**
     * Check if $user can edit TrainingUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUser $trainingUser
     * @return bool
     */
    public function canEdit(IdentityInterface $user, TrainingUser $trainingUser)
    {
    }

    /**
     * Check if $user can delete TrainingUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUser $trainingUser
     * @return bool
     */
    public function canDelete(IdentityInterface $user, TrainingUser $trainingUser)
    {
    }

    /**
     * Check if $user can view TrainingUser
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\TrainingUser $trainingUser
     * @return bool
     */
    public function canView(IdentityInterface $user, TrainingUser $trainingUser)
    {
    }
}
