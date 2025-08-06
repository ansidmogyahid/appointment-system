<?php

namespace App\Enum;

enum RoleEnum: string
{
    case CUSTOMER = 'customer';
    case ADMIN = 'admin';
    case BARBER = 'barber';
}