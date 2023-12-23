<?php
declare(strict_type=1);

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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 100)->comment('レシピ名');
            $table->text('ingredient')->nullable()->comment('材料');
            $table->text('recipe_method')->nullable()->comment('作り方');
            $table->date('last_make_date')->nullable()->comment('最後に作った日');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropForeign('posts_user_id_foreign');
        });
        Schema::dropIfExists('recipes');
    }
};
