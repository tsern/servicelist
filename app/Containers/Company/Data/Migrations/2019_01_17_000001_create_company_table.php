<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{

    /**
     * Run the migrations.
     */
    public $set_schema_table = 'companies';

    public function up()
    {
        if (Schema::hasTable ($this -> set_schema_table))
            return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description', 500);
            $table->string('logo');
            $table->unsignedInteger('address_id')->default(1);

            $table->timestamps();
            //$table->softDeletes();
        });

        Schema::table($this->set_schema_table, function ($table) {
            $table->foreign('address_id')
                ->references('id')->on('companies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        // Insert some stuff
        DB::table($this->set_schema_table)->insert(
            array(
                'name' => 'Google',
                'description' => 'some text',
                'logo' => '1',
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop($this->set_schema_table);
    }
}
