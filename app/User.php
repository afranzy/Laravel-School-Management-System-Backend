<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Okotieno\Gender\Traits\hasGender;
use Okotieno\NamePrefix\Traits\hasNamePrefix;
use Spatie\Permission\Traits\HasRoles;
use Okotieno\StudentAdmissions\Traits\canBeAStudent;

class User extends Authenticatable
{
    use HasApiTokens,
        Notifiable,
        HasRoles,
        canBeAStudent,
        hasNamePrefix,
        hasGender
        ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'middle_name',
        'other_names',
        'gender_id',
        'religion_id',
        'date_of_birth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPassword($password)
    {
        $this->password = bcrypt($password);
        $this->save();
        return $this;
    }
}