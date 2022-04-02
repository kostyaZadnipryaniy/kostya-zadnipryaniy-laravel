<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_tails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('tail_id');

            $table->index('category_id', 'category_tail_category_idx');
            $table->index('tail_id', 'category_tail_tail_idx');

            $table->foreign('category_id', 'category_tail_category_fk')->on('categories')->references('id');
            $table->foreign('tail_id', 'category_tail_tail_fk')->on('tails')->references('id');

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
        Schema::dropIfExists('category_tails');
    }
}
