<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsExInRouteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ex_route', function (Blueprint $table) {
            $table->string('sharepoint_link')->after('file_upload')->nullable();
            $table->string('outgoing')->after('modeoftrans')->nullable();
            $table->string('note_comment_personnel')->after('outgoing')->nullable();
            $table->renameColumn('note_comment', 'note_comment_routed');
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->string('sharepoint_link')->after('file_upload')->nullable();
            $table->string('outgoing')->after('sharepoint_link')->nullable();
            $table->string('note_comment_personnel')->after('outgoing')->nullable();
            $table->renameColumn('note_comment', 'note_comment_routed');
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
