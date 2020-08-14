<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('male')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->string('code_num')->unique()->index();
            $table->bigInteger('rfid_num')->unique();
            $table->string('ref_user')->nullable();
            $table->string('dedicated_num')->nullable();
            $table->string('n_code')->nullable();
            $table->text('address')->nullable();
            $table->string('password');
            $table->text('notif')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
