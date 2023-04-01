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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('groupname')->nullable();
            $table->string('media')->nullable();
            $table->string('actions')->nullable();
            $table->string('evidenceactions')->nullable();
            $table->string('amount')->nullable();
            $table->string('date')->nullable();
            $table->string('methodofpayment')->nullable();
            $table->string('evidencetransaction')->nullable();
            $table->string('contactgroup')->nullable();
            $table->string('reportandresponse')->nullable();
            $table->string('relevantinfo')->nullable();
            $table ->string('user_id')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('reports');
    }
};
