<?php

namespace App\Enum;

class UserEnum
{
    const USER_AVATAR_PATH     = 'uploads/users/';
    const USER_AVATAR_DEFAULT  = self::USER_AVATAR_PATH . 'default_user.png';

    const GENDER_FEMALE = 1;
    const GENDER_MALE   = 0;
}
