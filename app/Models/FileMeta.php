<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Domain;

class FileMeta extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function domain() {
        return $this->belongsTo(Domain::class);
    }
}
