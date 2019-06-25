<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'userlist';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'userid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userpassword', 'username', 'isactive', 'isadmin', 'userid', 'canreview', 'canapprove', 'userposition',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'userpassword', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
