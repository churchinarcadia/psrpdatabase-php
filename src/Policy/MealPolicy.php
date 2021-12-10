<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Meal;
use Authorization\IdentityInterface;

/**
 * Meal policy
 */
class MealPolicy
{
    /**
     * Check if $user can add Meal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Meal $meal
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Meal $meal)
    {
    }

    /**
     * Check if $user can edit Meal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Meal $meal
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Meal $meal)
    {
    }

    /**
     * Check if $user can delete Meal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Meal $meal
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Meal $meal)
    {
    }

    /**
     * Check if $user can view Meal
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Meal $meal
     * @return bool
     */
    public function canView(IdentityInterface $user, Meal $meal)
    {
    }
}
