<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_post', function (Blueprint $table) {
            $table->id();
            $table->string('user_password');
            $table->string('post_title');
            $table->string('post_content');
            $table->string('post_images');
            $table->string('post_date');
            $table->string('post_last_update');
            $table->string('post_link');
            $table->string('post_status');
            $table->string('post_view');
            $table->foreignId('user_id')
            ->constrained('tb_user')
            ->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');

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
        Schema::dropIfExists('tb_post');
    }
}
