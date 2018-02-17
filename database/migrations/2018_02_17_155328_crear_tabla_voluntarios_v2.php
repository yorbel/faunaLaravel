<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVoluntariosV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voluntarios', function (Blueprint $table) {
            $table->string('ruta_foto_perfil')->after('apellidos');
            $table->renameColumn('acciones_realizadas', 'apoyo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('voluntarios', function (Blueprint $table) {
            $table->dropColumn('ruta_foto_perfil');
            $table->renameColumn('apoyo', 'acciones_realizadas');
        });
    }
}
