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
        Schema::create('apprentices_briefs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprentice_id')->nullable();
            $table->unsignedBigInteger('brief_id')->nullable();
            $table->foreign('apprentice_id')->references('id')->on('apprentices')->onDelete('cascade');
            $table->foreign('brief_id')->references('id')->on('briefs')->onDelete('cascade');
            $table->date('dateAssignment');
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
        Schema::dropIfExists('apprentices_briefs');
    }
};
