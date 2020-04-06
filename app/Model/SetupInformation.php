<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SetupInformation extends Model
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
    protected $table = 'setupinformation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

}
