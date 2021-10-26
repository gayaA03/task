<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UserCountByRole implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if ($value == User::ROLE_ADMIN) {
            $userCount = User::where('role',User::ROLE_ADMIN)->count();
            return !($userCount >= 3);
        } else {
            $userCount = User::where('role',User::ROLE_USER)->count();
            return !($userCount >= 19);
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'You can not register with this role';
    }
}
