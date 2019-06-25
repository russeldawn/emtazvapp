<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransactionFiles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transactionfiles';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'td_id';

}
