<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\UuidTrait;

class Material extends Model
{
    use UuidTrait;
    protected $table = 'subchapters';
    public $incrementing = false;
    protected $fillable = ['content', 'thumbnail', 'title'];
}
