<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->char('codigo_barras', 255);

            $table->char('nombre', 255);

            $table->char('descripcion', 255);

            $table->integer('stock');

            $table->decimal('precio');

            $table->enum('iva', ['0', '16']);

            $table->timestamp('created_at')->nullable();

            $table->timestamp('updated_at')->nullable();

            $table->unique('codigo_barras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
