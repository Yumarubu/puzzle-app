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
        Schema::create('have_item', function (Blueprint $table) {
            $table->id();           //idカラム
            $table->string('user_name',20)->get('name',);
            $table->string('item_name',20);
            //$table->string('type',20);
            //$table->integer('effect');
            $table->integer('have_count');
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
        Schema::dropIfExists('have_item');
    }
};
