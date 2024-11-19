<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations. migracion que nos muestra como agregar y eliminar una columna a una tabla
     */
    public function up(): void
{
    Schema::table('posts_tables', function (Blueprint $table) {
        $table->text('description')-> after('posts1')->nullable();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts_tables', function (Blueprint $table) {
            //
            $table->dropColumn ('description');
        });
    }
};
