<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id')->comment('teacher taking this class');
            $table->unsignedBigInteger('class_id')->comment('The class the teacher is taking');
            $table->enum('term', ['first', 'second', 'third'])->nullable()->default('first')->comment('The term ');
            $table->dateTime('session_start')->nullable()->default(now()->toDateTimeString());
            $table->dateTime('session_end')->nullable()->default(now()->addMonths(3)->toDateTimeString());
            $table->dateTime('admission_start')->default(now()->toDateTimeString());
            $table->dateTime('admission_end')->default(now()->addMonths(3)->toDateTimeString());
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
        Schema::dropIfExists('registers');
    }
}
