<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static create(array $data)
 */
class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'director',
        'year',

    ];


}
