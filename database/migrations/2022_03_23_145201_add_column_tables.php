<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('externals', function (Blueprint $table) {
            $table->string('dts')->after('id')->nullable();
        });

        Schema::table('internals', function (Blueprint $table) {
            $table->string('dts')->after('id')->nullable();
        });

        Schema::table('ex_route', function (Blueprint $table) {
            $table->string('dts')->after('id')->nullable();
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->string('dts')->after('id')->nullable();
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
