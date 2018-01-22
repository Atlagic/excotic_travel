<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('idDeal');
            $table->string('header')->length(50);
            $table->string('place')->length(50);
            $table->string('title')->length(500);
            $table->string('title2')->length(500);
            $table->string('time')->length(30);
            $table->string('price')->length(20);
            $table->integer('date')->length(100);
            $table->string('picture')->length(100);
            $table->timestamp('updated_at')->nullable();
        });
        
        DB::table('audits')->whereNull('updated_at')->update([
            'created_at' => DB::raw('created_at'),
            'updated_at' => DB::raw('created_at'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
