<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 * @method static create(array $array)
 */
class MailTemplate extends Model
{
    use HasFactory;

    protected $fillable=[
        'subject',
        'template'
    ];
}
