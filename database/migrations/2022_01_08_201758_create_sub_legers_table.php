<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubLegersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_legers', function (Blueprint $table) {
            $table->id();

            $table->string('name', 240)->nullable();
            $table->text('description')->nullable();

            $table->bigInteger('parent_id')->unsigned()->nullable();

            $table->bigInteger('added_by')->unsigned()->nullable();

            $table->foreign('parent_id')->references('id')->on('cost_centers')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('sub_legers');
    }
}
