<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained();
        });
        Schema::table('posts', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained();
        });
        Schema::table('post_tag', function (Blueprint $table) {

            $table->foreignId('post_id')->constrained();
            $table->foreignId('tag_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {

            $table->dropForeign('user_details_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('posts', function (Blueprint $table) {

            $table->dropForeign('posts_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('post_tag', function (Blueprint $table) {

            $table->dropForeign('post_tag_post_id_foreign');
            $table->dropColumn('post_id');

            $table->dropForeign('post_tag_tag_id_foreign');
            $table->dropColumn('tag_id');
        });
    }
};
