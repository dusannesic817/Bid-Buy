<?php

namespace App\Models;


use Carbon\Carbon;
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
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images():HasMany{
        return $this->hasMany(Image::class);
    }

    public function offers():HasMany{
        return $this->hasMany(Offer::class);
    }

    public function views():HasMany{
        return $this->hasMany(View::class);
    }

    public function conditions():BelongsTo{
        return $this->BelongsTo(Condition::class, 'condition_id');
    }


     protected function imageSrc(): Attribute {
        return Attribute::make(fn() => 
            $this->images->isNotEmpty() && 
            Storage::disk('public')->exists('auction_images/' . $this->images->first()->img_path) ? 
            Storage::url('public/auction_images/' . $this->images->first()->img_path) : 
            Storage::url('public/auction_images/no_image.png')
        );
    }


    public function calculateLeftTimeForOffer(){



        $currentDateTime = Carbon::now('Europe/Belgrade');
        $currentDateTimeFormatted = $currentDateTime->format('Y-m-d H:i:s');
        $expiry_time = Carbon::parse($this->expiry_time);

        $differenceInHours = $expiry_time->floatDiffInHours($currentDateTimeFormatted);

        $round= ceil(abs($differenceInHours));

        if($round>=24){
            $dani=$round/24;
            return ceil($dani) ." Days";
       }elseif($round<1){
          $sati= round(abs($round)*60);
           return $sati. " Minutes";
       }else{
          return $round. " Hours";
       }

       
    }


 
}
