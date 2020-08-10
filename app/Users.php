<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

    protected $table = "users";

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_type',
        'name',
        'password',
        'email',
        'address',
        'remember_token',
        'email_verified_at',
        'api_token',
        'fcp_token',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
    ];
}
