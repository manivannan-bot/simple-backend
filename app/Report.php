<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = ['title', 'type', 'description','banner','custom_file'];

    protected $casts = [
        'removable' => 'boolean'
    ];
}
