<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'generatedResumes';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'genId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

}