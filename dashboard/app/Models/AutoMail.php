<?php

namespace App\Models;

use Chatify\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $name
 * @property mixed $email
 * @method static insert(array $insertData)
 * @method static select(string $string, string $string1)
 * @method static whereIn(string $string, $pluck)
 */
class AutoMail extends Model
{
    use HasFactory;
    use UUID;

    protected $fillable = [
        'name',
        'email'
    ];
}
