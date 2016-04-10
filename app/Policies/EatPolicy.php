<?php

namespace App\Policies;

use App\Eat;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EatPolicy
{
    use HandlesAuthorization;

    public function manage(User $user, Eat $eat)
    {
        return $user->id === $eat->user_id;
    }
}
