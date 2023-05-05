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
     Schema::table('trains',function (Blueprint $table){
        $table->timestamp('departure_time')->nullable(true)->after('arrival_station');
        $table->timestamp('arrival_time')->nullable(true)->after('departure_time');
        });  
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains',function (Blueprint $table){
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
        });
    }
};
