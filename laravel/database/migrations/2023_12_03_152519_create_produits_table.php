<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('prix');
            $table->string('description');
            $table->integer('stock');
            $table->string('image');
            $table->string('category');
            $table->timestamps();
        });
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->integer('produitid');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produitid')->references('id')->on('produits')->onDelete('cascade');

            $table->string('quantite')->default(1);
         
            $table->timestamps();
        });
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->integer('produitid');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produitid')->references('id')->on('produits')->onDelete('cascade');
            $table->string('quantite')->default(1);
            $table->integer('montanttotal');
            $table->string('status');
            $table->string('adresselivraison');
            $table->date('datecommande');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
        Schema::table('panid', function (Blueprint $table) {
            $table->dropForeign('paniers_userid_foreign'); // Drop the foreign key constraint
            $table->dropColumn('userid'); // Drop the column if need
        });}
};
