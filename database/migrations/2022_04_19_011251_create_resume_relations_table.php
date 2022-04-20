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
        Schema::create('resumeRelations', function (Blueprint $table) {
            $table->bigIncrements('relId');
            $table->unsignedBigInteger('genId');
            $table->foreign('genId')->references('genId')->on('generatedResumes');
            $table->unsignedBigInteger('itemId');
            $table->foreign('itemId')->references('itemId')->on('resume_items');
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
        Schema::dropIfExists('resumeRelations');
    }
};
