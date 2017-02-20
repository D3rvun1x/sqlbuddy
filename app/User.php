<?php

namespace App;

use Illuminate\Auth\GenericUser;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends GenericUser implements AuthenticatableContract, AuthorizableContract
{
    use Authorizable;

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'user';
    }
}
