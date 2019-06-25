<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandUseClass extends Model
{
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'landuseclass';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'landuse_id';

}
