<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained('items')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['user_id', 'product_id']);
        });

        Schema::create('order_trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('status');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->timestamp('tracked_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_trackings');
        Schema::dropIfExists('wishlists');
    }
};
