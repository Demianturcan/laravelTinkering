<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static create(array $data)
 */
class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'rating',
        'is_active',
        'release_date',
        'description',
    ];
}



