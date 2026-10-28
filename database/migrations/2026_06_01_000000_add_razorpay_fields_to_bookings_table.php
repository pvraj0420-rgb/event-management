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
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'currency')) {
                $table->string('currency')->default('INR')->after('total_amount');
            }
            if (!Schema::hasColumn('bookings', 'amount_inr')) {
                $table->decimal('amount_inr', 10, 2)->nullable()->after('currency');
            }
            if (!Schema::hasColumn('bookings', 'razorpay_order_id')) {
                $table->string('razorpay_order_id')->nullable()->after('amount_inr');
            }
            if (!Schema::hasColumn('bookings', 'razorpay_payment_id')) {
                $table->string('razorpay_payment_id')->nullable()->after('razorpay_order_id');
            }
            if (!Schema::hasColumn('bookings', 'razorpay_signature')) {
                $table->string('razorpay_signature')->nullable()->after('razorpay_payment_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn([
                'currency',
                'amount_inr',
                'razorpay_order_id',
                'razorpay_payment_id',
                'razorpay_signature'
            ]);
        });
    }
};
