<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_links', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->integer('link_type_id');
            $table->string('title');
            $table->string('desc');
            $table->text('url');
            $table->text('img_url');
            $table->timestamp('expires_on');
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
        Schema::dropIfExists('tbl_links');
    }
}
