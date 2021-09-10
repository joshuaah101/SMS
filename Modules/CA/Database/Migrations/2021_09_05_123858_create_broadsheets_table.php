<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroadsheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broadsheets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_sheet_id');
            $table->unsignedBigInteger('subject_id');
            $table->enum('term', ['first', 'second', 'third']);
            $table->string('total_score')->nullable()->default(0)->comment('exam total (70) + CA total(30)');
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
        Schema::dropIfExists('broadsheets');
    }
}
