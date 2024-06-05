<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('auctions', function (Blueprint $table) {
           $table->unsignedBigInteger('condition_id')->after('category_id');
        


           $table->foreign('condition_id','auction_condition_condition_fk')->references('id')->on('conditions')
           ->onUpdate('cascade')
           ->onUpdate('cascade');

        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
