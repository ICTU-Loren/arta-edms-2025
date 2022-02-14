<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToExInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('externals', function (Blueprint $table) {
            $table->string('created_by_department')->after('created_by_user_id')->nullable();
            $table->string('created_by_office')->after('created_by_department')->nullable();
        });

        Schema::table('internals', function (Blueprint $table) {
            $table->string('created_by_department')->after('created_by_user_id')->nullable();
            $table->string('created_by_office')->after('created_by_department')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ex_in', function (Blueprint $table) {
            Schema::table('externals', function (Blueprint $table) {
                $table->string('created_by_department');
                $table->string('created_by_office');
            });
    
            Schema::table('internals', function (Blueprint $table) {
                $table->string('created_by_department');
                $table->string('created_by_office');
            });
        });
    }
}
