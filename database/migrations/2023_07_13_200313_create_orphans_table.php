<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orphans', function (Blueprint $table) {
            $table->id();

            $table->string('en_about_his_life');
            $table->string('en_reason_he_needs_bail');
            $table->string('en_name');
            $table->string('en_address');
            $table->string('en_current_incubator');
            $table->string('en_health_status');
            $table->string('en_brothers');
            $table->string('en_study');

            $table->string('ar_about_his_life');
            $table->string('ar_reason_he_needs_bail');
            $table->string('ar_name');
            $table->string('ar_address');
            $table->string('ar_current_incubator');
            $table->string('ar_health_status');
            $table->string('ar_brothers');
            $table->string('ar_study');

            $table->unsignedFloat('guarantee_amount');

            $table->enum('case',['yes','no'])->default('no');

            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orphans');
    }
};
