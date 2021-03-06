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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Offertype::class)->nullable()->constrained()->default(null);
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained();
            $table->string('postcode');
            $table->string('country');
            $table->dateTimeTz('offerEndsAt')->nullable()->default(null);
            $table->integer('amount');
            $table->text('title');
            $table->longText('description');
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
        Schema::dropIfExists('offer');
    }
};
