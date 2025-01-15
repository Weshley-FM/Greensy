<?php

namespace App\Policies;

use App\Models\User;
use App\Models\tweet;
use Illuminate\Auth\Access\Response;

class TweetPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, tweet $tweet): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, tweet $tweet): bool
    {

        return $user->id == $tweet->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, tweet $tweet): bool
    {
        return $user->id == $tweet->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, tweet $tweet): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, tweet $tweet): bool
    {
        return false;
    }
}
