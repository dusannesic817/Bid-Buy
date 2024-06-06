<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

   /* protected function imgSrc(): Attribute{
        return Attribute::make(
        get: fn () =>  ($this->image && Storage::disk('public')->exists($this->image))? 
           Storage::url($this->image): '/storage/auction_images/default-movie.jpg'
        );

     }*/
     protected function imageSrc(): Attribute {
        return Attribute::make(fn() => 
            $this->images->isNotEmpty() && 
            Storage::disk('public')->exists('auction_images/' . $this->images->first()->img_path) ? 
            Storage::url('public/auction_images/' . $this->images->first()->img_path) : 
            Storage::url('public/auction_images/no_image.png')
        );
    }
    


 
}
