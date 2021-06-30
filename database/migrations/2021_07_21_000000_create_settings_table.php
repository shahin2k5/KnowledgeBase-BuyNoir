<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('logo')->nullable();
                $table->text('logo_white')->nullable();

                
                $table->string('favicon')->nullable();

                $table->string('meta_title')->nullable();
                $table->string('meta_description')->nullable();
                $table->string('meta_tag')->nullable();

                $table->text('address')->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();

                $table->string('facebook')->nullable();
                $table->string('twitter')->nullable();
                $table->string('linkedin')->nullable();
                $table->string('instagram')->nullable();


                // $table->biginteger('currency')->unsigned()->nullable();
                // $table->foreign('currency')->references('id')->on('currencies')->onDelete('cascade');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
