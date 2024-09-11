<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id(); 
            $table->tinyInteger('title')->nullable();
            $table->string('name', 255);
            $table->integer('designation')->nullable();
            $table->enum('gender', ['m', 'f', 't']);
            $table->string('organization', 255)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('passport_no', 100)->nullable();
            $table->string('discipline', 255)->nullable();
            $table->text('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->enum('presenting_paper', [0, 1])->default(0);
            $table->enum('country_type', ['Indian', 'SAARC', 'Others'])->default('Indian');
            $table->enum('user_type', ['Professional', 'Student'])->nullable();
            $table->string('conference_theme', 100)->nullable();
            $table->string('no_of_days', 100)->nullable();
            $table->string('participation_date', 100)->nullable();
            $table->enum('accomodation', [0, 1])->default(0);
            $table->enum('food', [0, 1])->default(0);
            $table->string('reciept', 255)->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->enum('currency', ['INR', 'USD'])->nullable();
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
        //
    }
}
