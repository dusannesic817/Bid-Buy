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

        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable(false)->after('name');
            $table->string('username')->nullable(false)->unique();
            $table->string('address')->nullable(false);
            $table->string('number')->after('address');
            $table->boolean('is_active')->default(0);

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
