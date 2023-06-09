<?php

namespace App\Models;

use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements CanVisit
{
    use HasFactory;
    use HasVisits;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
