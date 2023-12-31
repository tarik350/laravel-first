<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('base');
            $table->string('type');

            //this is a json datatype mysql db does not support array data type so we fisrt convert
            // the array into json string so this next attribute holds an array value in the form of string

            $table->json('toppings');
            //php artisan migrate won't detect this change right away
            //if you run it it will display noting to migrate
            //in order to make it realize the change you must rollback before migrating
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
