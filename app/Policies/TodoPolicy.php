<?php

namespace App\Policies;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TodoPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Todo $todo)
    {
        return $user->role === 'admin' || $user->id === $todo->user_id;
    }
}
