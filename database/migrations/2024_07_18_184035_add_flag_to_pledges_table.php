<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pledges', function (Blueprint $table) {
            $table->string('flag')->default('no');
        });
    }

    public function down()
    {
        Schema::table('pledges', function (Blueprint $table) {
            $table->dropColumn('flag');
        });
    }
};