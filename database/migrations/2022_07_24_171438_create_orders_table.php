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
            $table->string('date');
            $table->string('time');
            $table->float('estimated_price')->nullable();
            $table->longText('details');
            $table->enum('status',['ACCEPTED','PENDING','IN_PROGRESS','FINISHED','REJECTED','DELETED','CANCELED']);
            $table->foreignId('type_id')->constrained('types')->cascadeOnDelete();
            $table->foreignId('from_id')->constrained('addresses')->cascadeOnDelete();
            $table->foreignId('to_id')->constrained('addresses')->cascadeOnDelete();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
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
        Schema::dropIfExists('orders');
    }
}
