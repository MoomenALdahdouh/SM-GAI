<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_drivers', function (Blueprint $table) {
            $table->id();
            $table->string('license_type');
            $table->integer('license_number');
            $table->boolean('is_commissioner');
            $table->longText('certificate_precedents_Image');
            $table->longText('driving_license_image');
            $table->longText('driver_id_image');
            $table->longText('commissioner_image')->nullable();
            $table->longText('insurance_image');
            $table->longText('card_employment_image');
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
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
        Schema::dropIfExists('information_drivers');
    }
}
