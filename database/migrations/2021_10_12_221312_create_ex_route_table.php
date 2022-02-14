<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ex_route', function (Blueprint $table) {
            $table->id();
            $table->string('dts_no')->nullable();
            $table->string('status')->default('Open');
            $table->string('department')->nullable();
            $table->foreignId('department_id')->nullable();
            $table->string('office')->nullable();
            $table->foreignId('office_id')->nullable();
            $table->string('div_unit')->nullable();
            $table->foreignId('div_unit_id')->nullable();
            $table->string('personnel')->nullable();
            $table->foreignId('personnel_id')->nullable();
            $table->string('action')->nullable();
            $table->string('file_upload')->nullable();
            $table->string('note_comment')->nullable();
            $table->string('assigned_date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('cc_email')->nullable();
            $table->string('doc_class')->nullable();
            $table->string('doc_type')->nullable();
            $table->string('sent_date')->nullable();
            $table->string('modeoftrans')->nullable();
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
        Schema::dropIfExists('ex_route');
    }
}
