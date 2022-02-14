<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToExrouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ex_route', function (Blueprint $table) {
            $table->string('sent_time')->after('sent_date')->nullable();
            $table->string('routed_by')->after('modeoftrans')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ex_route', function (Blueprint $table) {
            $table->dropColumn(['sent_time',  'routed_by']);
        });
    }
}
