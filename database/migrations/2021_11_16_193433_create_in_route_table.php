<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_route', function (Blueprint $table) {
            $table->id();
            $table->string('dts_no')->nullable();
            $table->string('status')->default('New');
            $table->string('department')->nullable();
            $table->foreignId('department_id')->nullable();
            $table->string('office')->nullable();
            $table->foreignId('office_id')->nullable();
            $table->string('div_unit')->nullable();
            $table->foreignId('div_unit_id')->nullable();
            $table->string('personnel')->nullable();
            $table->foreignId('personnel_id')->nullable();
            $table->string('action_req')->nullable();
            $table->string('file_upload')->nullable();
            $table->string('note_comment')->nullable();
            $table->string('assigned_date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('cc_email')->nullable();
            $table->string('doc_class')->nullable();
            $table->string('doc_type')->nullable();
            $table->string('sent_date')->nullable();
            $table->string('sent_time')->nullable();
            $table->string('modeoftrans')->nullable();
            $table->string('routed_by')->nullable();
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
        Schema::dropIfExists('in_route');
    }
}
