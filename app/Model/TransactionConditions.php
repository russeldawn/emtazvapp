<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransactionConditions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transactionconditions';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'transaction_id';

}
