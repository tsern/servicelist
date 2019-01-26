<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTables extends Migration
{
    /**
     * @var string
     */
    public $set_schema_table = 'addresses';

    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('city');
            $table->string('street');
            $table->string('number');
            $table->string('type');
            $table->decimal('lat');
            $table->decimal('lon');

            $table->timestamps();
            //$table->softDeletes();
        });
    }
}

