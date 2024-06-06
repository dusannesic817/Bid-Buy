<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable=['auction_id','img_path'];

    public function auction():BelongsTo{
        return $this->belongsTo(Auction::class,'auction_id');
    }
}
