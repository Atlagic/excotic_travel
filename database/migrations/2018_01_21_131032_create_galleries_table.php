<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('idPicture');
            $table->string('smallPicture')->length(100);
            $table->string('bigPicture')->length(100);
            $table->string('alt')->length(50);
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
        Schema::dropIfExists('galleries');
    }
}
