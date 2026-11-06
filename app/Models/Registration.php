<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $kategori_lari 5K | 10K | Half Marathon (21K) | Full Marathon (42K)
 * @property string $level_pengalaman Pemula | Menengah | Berpengalaman
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Registration extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'kategori_lari',
        'level_pengalaman',
    ];
}
