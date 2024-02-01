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
        Schema::create('tbl_enquiry', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->unsignedBigInteger('model');
            $table->foreign('model')->references('id')->on('tbl_product')->cascadeOnUpdate();
            $table->text('message')->nullable();
            $table->text('remark')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
        
        Schema::create('tbl_contact_us', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('subject')->nullable();
            $table->text('message')->nullable();
            $table->text('remark')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_enquiry');
        Schema::dropIfExists('tbl_contact_us');
    }
};
