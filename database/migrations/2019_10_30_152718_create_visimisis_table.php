<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisimisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visimisis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('visi');
            $table->text('misi');

            //foreign key
            $table->unsignedInteger('paslon_id');
            $table->foreign('paslon_id')->references('id')->on('paslons')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visimisis');
    }
}
