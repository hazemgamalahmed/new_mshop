<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->unsignedBigInteger('client_id')->index();
            $table->float('total_amount')->default(0);
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->softDeletes();
            //foreign key for the clients
            $table->foreign('client_id')
            ->on('clients')

            ->references('id')
            ->cascadeOnDelete();
            // foreign key from users
            $table->foreign('user_id')
            ->on('users')
            ->references('id')
            ->cascaadeOnDelete();
            

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
        Schema::dropIfExists('orders');
    }
}
