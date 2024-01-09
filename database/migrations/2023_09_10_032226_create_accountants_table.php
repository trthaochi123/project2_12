<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountants', function (Blueprint $table) {
            $table->id();
            $table->string('accountant_name',100);
            $table->string('accountant_phone',20);
            $table->string('province',100);
            $table->string('district',100);
            $table->string('street',100);
            $table->string('accountant_username',100);
            $table->string('accountant_password',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accountants');
    }
};
