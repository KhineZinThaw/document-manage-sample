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
        Schema::create('student_forms', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('organization_remark');
            $table->string('organization_sign')->nullable();
            $table->string('name');
            $table->string('title');
            $table->string('sub_title');
            $table->dateTime('date');
            $table->text('description');
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
        Schema::dropIfExists('student_forms');
    }
};
