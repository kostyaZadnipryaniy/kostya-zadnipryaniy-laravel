<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTableFromFronts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('fronts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::create('fronts', function (Blueprint $table) {
       //     $table->id();
       //     $table->string('comment')->nullable();
       //     $table->unsignedInteger('value');
       //     $table->unsignedInteger('trend')->nullable()->after('value');
       //     $table->timestamps();
//
       //     $table->softDeletes();
       // });
    }
}
