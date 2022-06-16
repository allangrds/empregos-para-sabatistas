<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function($table) {
            $table->enum('allocation', ['presential', 'hybrid', 'remote'])->nullable($value = true);
            $table->longText('responsabilities')->nullable($value = true);
            $table->string('working_time')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function($table) {
            $table->dropColumn('allocation');
            $table->dropColumn('responsabilities');
            $table->dropColumn('working_time');
        });
    }
}
