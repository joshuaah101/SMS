<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->text('admission_title')->nullable();
            $table->longText('description')->nullable();
            $table->date('session_start')->nullable()->default(now()->toDateString());
            $table->date('session_end')->nullable()->default(now()->addMonths(3)->toDateString());
            $table->date('admission_start')->default(now()->toDateString());
            $table->date('admission_end')->default(now()->addMonths(3)->toDateString());
            $table->boolean('active')->nullable()->default(true);
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
        Schema::dropIfExists('admissions');
    }
}
