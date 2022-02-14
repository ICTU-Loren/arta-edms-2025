<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ex_route', function (Blueprint $table) {
            $table->string('modified_at')->after('routed_by')->nullable();
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->string('modified_at')->after('routed_by')->nullable();
            $table->string('open_at')->after('updated_at')->nullable();
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
            $table->dropColumn('routed_by');
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->dropColumn('routed_by');
            $table->dropColumn('updated_at');
        });
    }
}
