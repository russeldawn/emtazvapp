<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FormList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'formlist';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'formid';

}
