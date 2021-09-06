<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->boolean('allow_student_registration')->nullable()->default(true);
            $table->boolean('allow_student_login')->nullable()->default(true);
            $table->boolean('allow_alumni_registration')->nullable()->default(true);
            $table->boolean('allow_alumni_login')->nullable()->default(true);
            $table->boolean('allow_parent_registration')->nullable()->default(true);
            $table->boolean('allow_parent_login')->nullable()->default(true);
            $table->boolean('allow_staff_registration')->nullable()->default(true);
            $table->boolean('allow_staff_login')->nullable()->default(true);
            $table->boolean('allow_general_notification')->nullable()->default(false);
            $table->boolean('allow_exam_registration')->nullable()->default(false);
            $table->boolean('allow_printing_results')->nullable()->default(false);
            $table->boolean('allow_printing_testimonial')->nullable()->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('school_settings');
    }
}
