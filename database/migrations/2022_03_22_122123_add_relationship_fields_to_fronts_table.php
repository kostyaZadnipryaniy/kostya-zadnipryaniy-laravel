<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFrontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fronts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'front_category_idx');
            $table->foreign('category_id', 'front_category_fk')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fronts', function (Blueprint $table) {
            //
        });
    }
}
