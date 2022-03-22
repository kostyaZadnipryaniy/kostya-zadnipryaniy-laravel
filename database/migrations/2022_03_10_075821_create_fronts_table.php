<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fronts', function (Blueprint $table) {
            $table->id();
            $table->string('comment')->nullable();
            $table->unsignedInteger('value');
            $table->timestamps();

            $table->softDeletes();
            
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
        Schema::dropIfExists('fronts');
    }
}
