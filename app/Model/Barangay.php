<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'barangay';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'barangay_name',
	];

	/**
     * The primary key associated with the table.
     *
     * @var string
     */
	protected $primaryKey = 'barangay_id';
}
