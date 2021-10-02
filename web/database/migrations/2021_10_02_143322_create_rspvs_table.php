<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRspvsTable extends Migration
{
    public function up()
    {
        Schema::create('rspvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained();
            $table->boolean('coming');
            $table->text('song');
            $table->text('dietary');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rspvs');
    }
}
