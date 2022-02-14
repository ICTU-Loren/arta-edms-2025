<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('externals', function (Blueprint $table) {
            $table->string('created_by_div_unit')->after('created_by_user_id')->nullable();
            $table->string('modified_by')->after('created_by_div_unit')->nullable();
            $table->string('modified_by_div_unit')->after('modified_by')->nullable();
            $table->string('received_by_div_unit')->after('received_by')->nullable();
        });

        Schema::table('internals', function (Blueprint $table) {
            $table->string('created_by_div_unit')->after('created_by_user_id')->nullable();
            $table->string('modified_by')->after('created_by_div_unit')->nullable();
            $table->string('modified_by_div_unit')->after('modified_by')->nullable();
        });

        Schema::table('ex_route', function (Blueprint $table) {
            $table->string('subject')->after('action_req')->nullable();
            $table->string('routed_by_div_unit')->after('routed_by')->nullable();
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->string('subject')->after('action_req')->nullable();
            $table->string('routed_by_div_unit')->after('routed_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('externals', function (Blueprint $table) {
            $table->dropColumn('created_by_div_unit');
            $table->dropColumn('modified_by');
            $table->dropColumn('modified_by_div_unit');
            $table->dropColumn('received_by_div_unit');
        });

        Schema::table('internals', function (Blueprint $table) {
            $table->dropColumn('created_by_div_unit');
            $table->dropColumn('modified_by');
            $table->dropColumn('modified_by_div_unit');
        });

        Schema::table('ex_route', function (Blueprint $table) {
            $table->dropColumn('subject');
            $table->dropColumn('routed_by_div_unit');
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->dropColumn('subject');
            $table->dropColumn('routed_by_div_unit');
        });
    }
}
