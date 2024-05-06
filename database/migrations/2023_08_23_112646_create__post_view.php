<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_post_view', function (Blueprint $table) {
            $table->id();
            $table->string('view_date');
            $table->string('view_ip');
            $table->foreignId('post_id')
            ->constrained('tb_post')
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
        Schema::dropIfExists('_post_view');
    }
}
