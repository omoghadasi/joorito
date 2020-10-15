<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('fname',50)->nullable()->default('نام شما...');
            $table->string('lname',50)->nullable()->default('نام خانوادگی شما...');
            $table->string('address',255)->nullable()->default('آدرس شما...');
            $table->string('ostan',50)->nullable()->default('استان شما...');
            $table->string('shahr',50)->nullable()->default('شهر شما...');
            $table->string('phone',11)->nullable()->default('09xxxxxxxxx');
            $table->string('about_me',255)->nullable()->default('درباره شما...');
            $table->string('src_img',255)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('tbl_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users_profile');
    }
}
