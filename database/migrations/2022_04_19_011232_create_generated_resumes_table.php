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
        Schema::create('generatedResumes', function (Blueprint $table) {
            $table->bigIncrements('genId');
            $table->string('name', 150);
            $table->string('email', 200);
            $table->string('website', 150);
            $table->string('socialMedia', 200);
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
        Schema::dropIfExists('generatedResumes');
    }
};
