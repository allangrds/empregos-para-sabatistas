<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(false);
            $table->string('slug');
            $table->string('job_name');
            $table->string('description')->nullable($value = true);
            $table->string('company_name');
            $table->enum('contract_type', ['clt_full', 'clt_part', 'pj']);
            $table->longText('requirements');
            $table->longText('differential')->nullable($value = true);
            $table->longText('benefits');
            $table->integer('salary')->nullable($value = true);
            $table->integer('initial_salary')->nullable($value = true);
            $table->integer('final_salary')->nullable($value = true);
            $table->longText('how_to_apply');
            $table->string('zipcode');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
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
        Schema::dropIfExists('jobs');
    }
}
