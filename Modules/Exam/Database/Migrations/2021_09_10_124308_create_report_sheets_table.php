<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_sheets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('register_id');
            $table->unsignedBigInteger('student_id');
            $table->string('first_total')->nullable()->default(0)->comment('from broadsheet where term is first (100)');
            $table->string('first_second_total')->nullable()->default(0)->comment('addition of first and second term in broadsheet (200)');
            $table->string('first_second_third_total')->nullable()->default(0)->comment('addition of first,second and third term in broadsheet (300)');
            $table->string('cumulative_total')->nullable()->default(0)->comment('first_second_third /3 (100)');
            $table->string('position')->nullable();
            $table->string('grade')->nullable();
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
        Schema::dropIfExists('report_sheets');
    }
}
