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
        Schema::create('items', function (Blueprint $table) {
            $table->id();           //idカラム
            $table->string('item_name',20);
            $table->string('type',20);
            $table->integer('effect');
            $table->string('comment', 35);
            $table->timestamps();   //created_at,updated_at

            //$table->index('name');      //nameにインデックス設定
            $table->unique('item_name');     //nameにユニーク設定
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
