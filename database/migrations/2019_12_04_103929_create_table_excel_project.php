<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableExcelProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_project', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('Heading_1');
            $table->text('Heading_2');
            $table->text('Category');
            $table->text('Manufacturer');
            $table->text('Name');
            $table->text('Model_number');
            $table->longText('Text');
            $table->text('Price');
            $table->text('Guarantee');
            $table->longText('Availability');

            $table->text('Other');

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
        Schema::dropIfExists('excel_project');
    }
}
