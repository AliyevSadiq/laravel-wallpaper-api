<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class WallPaper
 * @package App\Models
 * @mixin Builder
 */
class WallPaper extends Model
{
    use HasFactory;


    protected $table='wallpapers';
}
