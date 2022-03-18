<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // creo la foreignkey
            $table->foreignId('category_id')
            ->nullable()
            ->constrained()
            ->onDelete('set null'); 
            // se viene elimiinata una categoria, al posto della FK viene settato il valore null
            // onDelete fa riferimento alla foreignKey
            ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // sgancia la foreignkey
            $table->dropForeign(['category_id']); 
            // cancella la foreignkey
            $table->dropColumn(['category_id']);
        });
    }
}
