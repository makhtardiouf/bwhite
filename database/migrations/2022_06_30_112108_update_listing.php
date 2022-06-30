<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing', function (Blueprint $table) {
            $table->string('name')->after('area')->nullable();
            $table->string('adresse')->after('name')->nullable();
            $table->string('phone')->after('adresse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing', function (Blueprint $table) {
            $table->dropColumn(array_merge([
                'name',
                'adresse',
                'phone',
            ]));
        });
    }
};
