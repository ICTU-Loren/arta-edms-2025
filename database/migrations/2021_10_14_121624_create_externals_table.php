<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('externals', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Open');
            $table->string('department');
            $table->string('office');
            $table->string('div_unit');
            $table->string('personnel');
            $table->string('doc_class');
            $table->string('doc_type');
            $table->string('title');
            $table->string('subject');
            $table->string('mode_of_trans');
            $table->string('s_profile');
            $table->string('s_name');
            $table->string('s_address');
            $table->string('s_email');
            $table->string('s_contact');
            $table->string('file_title');
            $table->string('filename');
            $table->string('received_by');
            $table->string('comment');
            $table->string('date_received');
            $table->string('time_received');
            $table->string('created_by');
            $table->unsignedInteger('created_by_user_id')->nullable();
            $table->foreign('created_by_user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('externals');
    }
}