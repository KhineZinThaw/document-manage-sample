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
        Schema::create('teacher_forms', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('organization_remark');
            $table->string('organization_sign');
            $table->string('name');
            $table->sting('title');
            $table->sting('sub_title');
            $table->dateTime('date');
            $table->longText('description');
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
        Schema::dropIfExists('teacher_forms');
    }
};
