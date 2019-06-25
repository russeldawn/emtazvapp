<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SmsSoutBound extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'smsoutbound';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'outboundid';

}
