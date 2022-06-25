<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('category')->default("Divers");
            $table->double('price');
            $table->string('image')->nullable();
            $table->string('area')->nullable();
            $table->boolean('approved')->default(false);

            $table->foreignIdFor(Category::class)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->integer('approver_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('category_id')->references('id')->on('category');
            //$table->foreign('approver_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listing');
    }
}
