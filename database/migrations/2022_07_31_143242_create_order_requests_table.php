<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_requests', function (Blueprint $table) {
            $table->id();
                $table->foreignId('order_id')->nullable()->constrained('orders')->cascadeOnDelete();
                $table->foreignId('driver_id')->nullable()->constrained('customers')->cascadeOnDelete();
                $table->timestamps();
                $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_requests');
    }
}
