<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ex_route', function (Blueprint $table) {
            $table->string('email')->after('personnel_id')->nullable();
            $table->string('previous_comment')->after('note_comment_personnel')->nullable();
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->string('email')->after('personnel_id')->nullable();
            $table->string('previous_comment')->after('note_comment_personnel')->nullable();
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
    }
}
