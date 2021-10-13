<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutgoingMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_mails', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("subject");
            $table->string("from");
            $table->string("to");
            $table->string("phone");
            $table->longText("content");
<<<<<<< HEAD
            $table->longText("file_name");
=======
            $table->longText("file");
>>>>>>> ae2c60a0d196f46ad83f907df1cc90eb44a8989d
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
        Schema::dropIfExists('outgoing_mails');
    }
}
