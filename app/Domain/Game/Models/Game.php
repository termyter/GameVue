<?php

namespace App\Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $image
 */
class Game extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'name',
        'description'
        'price',
        'image'
    ];
}
