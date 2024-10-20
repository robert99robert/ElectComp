<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("devices", function(Blueprint $table){
            $table->id();
            $table->string("tipo");
            $table->string("marca");
            $table->string("modelo");
            $table->float("potencia_Kw");
            $table->timestamps();//create at, update at
        });

        //xd

        Schema::create("prices", function(Blueprint $table){
            $table->id();
            $table->float("tarifa_menor");
            $table->float("tarifa_mayor");
            $table->string("pais");
            $table->timestamps();//create at, update at
        });

        Schema::create("details", function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_us');
            $table->unsignedBigInteger('id_de');
            $table->unsignedBigInteger('id_pr');
            $table->timestamps();//create at, update at
            $table->foreign('id_us')->references('id')->on('users');
            $table->foreign('id_de')->references('id')->on('devices');
            $table->foreign('id_pr')->references('id')->on('prices');
        });

        /*Schema::create("users_devices", function(Blueprint $table){
            //$table->increments("id_u_d");
            //$table->primary('id_u_d');
            
            $table->integer("id_det");
            $table->integer("id_us");
            $table->primary(['id_det', 'id_us']);
            $table->foreign('id_us')->references('id_us')->on('users')->onDelete('cascade');
            $table->foreign('id_det')->references('id_det')->on('details')->onDelete('cascade');
            $table->timestamps();//create at, update at
        });*/
    }

    /**
     * Reverse the migrations.
     */
    /**public function down(): void
    {
        Schema::dropIfExists("devices");
        Schema::dropIfExists("prices");
        Schema::dropIfExists("details");
        Schema::dropIfExists("users_devices");
    }**/

    
};
