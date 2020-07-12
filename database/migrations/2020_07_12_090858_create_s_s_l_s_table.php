<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSSLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_s_l_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('domain_link');
            $table->date('purchase_date');
            $table->date('renew_date');
            $table->decimal('price', 10, 2);
            $table->tinyInteger('bill_type')->default(1)->comment('1=Frist Year Free');
            $table->text('note')->nullable();
            $table->foreign('client_id')->references('clients')->on('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('s_s_l_s');
    }
}
