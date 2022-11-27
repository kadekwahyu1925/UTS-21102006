<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbkomponen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 
        schema::create('tbkomponen',function(Blueprint $tk){
            $tk->Increment('ID');
            $tk->string('Komponen');
            $tk->string('fungsi');
            $tk->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::dropfexists('tbkomponen');
    }
}
