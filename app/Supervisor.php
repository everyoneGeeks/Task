<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Supervisor extends Authenticatable
{

    use Notifiable;
    public $table="supervisors";
}
