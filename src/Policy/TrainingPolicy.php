<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Training;
use Authorization\IdentityInterface;

/**
 * Training policy
 */
class TrainingPolicy
{
    /**
     * Check if $user can add Training
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Training $training
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Training $training)
    {
    }

    /**
     * Check if $user can edit Training
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Training $training
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Training $training)
    {
    }

    /**
     * Check if $user can delete Training
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Training $training
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Training $training)
    {
    }

    /**
     * Check if $user can view Training
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Training $training
     * @return bool
     */
    public function canView(IdentityInterface $user, Training $training)
    {
    }
}
