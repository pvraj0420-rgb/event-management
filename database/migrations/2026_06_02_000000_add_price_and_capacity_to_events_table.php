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
        Schema::table('events', function (Blueprint $table) {
            if (!Schema::hasColumn('events', 'price')) {
                $table->decimal('price', 10, 2)->default(29.00)->after('description');
            }
            if (!Schema::hasColumn('events', 'capacity')) {
                $table->integer('capacity')->default(100)->after('price');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['price', 'capacity']);
        });
    }
};
