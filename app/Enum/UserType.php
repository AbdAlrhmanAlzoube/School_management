<?php 

namespace App\Enum;
enum UserType :string
{
    case ADMIN='admin';
    case STUDENT='student';
    case TEACHER='teacher';
}