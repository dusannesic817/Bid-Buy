<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auction extends Model
{
    use HasFactory;

    protected $fillable=['user_id','category_id','subcategory_id','condition_id',
    'name','short_description','description','started_price','expiry_time'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function images():HasMany{
        return $this->hasMany(Image::class);
    }

    public function views():HasMany{
        return $this->hasMany(View::class);
    }

    public function conditions():HasMany{
        return $this->hasMany(Condition::class);
    }
}
