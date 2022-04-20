<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeRelations extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resumeRelations';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'relId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'genId', 'itemId'
    ];

}