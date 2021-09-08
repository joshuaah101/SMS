<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->nullable()->default('Faith in Christ College');
            $table->string('school_motto')->nullable();
            $table->string('school_logo')->nullable();
            $table->string('school_principal')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email_address')->nullable();
            $table->longText('school_anthem')->nullable();
            $table->longText('school_pledge')->nullable();
            $table->longText('school_description')->nullable();
            $table->longText('school_address')->nullable();
            $table->longText('about_school')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('embedded')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
