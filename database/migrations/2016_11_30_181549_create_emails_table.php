<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->nullable();
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('subject');
            $table->text('message');
            $table->boolean('tls');
            $table->boolean('has_attachment');
            $table->text('attachment')->nullable();
            $table->string('attachment_name')->nullable();
            $table->string('attachment_mime')->nullable();
            $table->integer('status');
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
        Schema::drop('emails');
    }
}
