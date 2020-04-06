<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SmsLogs extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'smslogs';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'smslogid';

}
