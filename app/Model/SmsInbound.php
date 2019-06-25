<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SmsInbound extends Model
{
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'smsinbound';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'smsinboundid';

}
