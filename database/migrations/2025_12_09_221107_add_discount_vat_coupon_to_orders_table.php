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
        Schema::table('orders', function (Blueprint $table) {
            $table->decimal('subtotal', 10, 2)->default(0)->after('user_id');
            $table->decimal('discount', 10, 2)->default(0)->after('subtotal');
            $table->decimal('vat', 10, 2)->default(0)->after('discount');
            $table->decimal('coupon_discount', 10, 2)->default(0)->after('vat');
            $table->string('coupon_code')->nullable()->after('coupon_discount');
            $table->decimal('shipping', 10, 2)->default(0)->after('coupon_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['subtotal', 'discount', 'vat', 'coupon_discount', 'coupon_code', 'shipping']);
        });
    }
};
