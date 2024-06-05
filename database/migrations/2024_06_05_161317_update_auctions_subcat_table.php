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
            
            $table->unsignedBigInteger('subcategory_id')->after('category_id');
 
            $table->foreign('subcategory_id','auction_subcategory_subcategory_fk')->references('id')->on('subcategories')
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
