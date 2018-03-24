<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    protected $table = 'comments';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id')->comment('記事ID');
            $table->unsignedInteger('author_id')->nullable()->comment('コメント投稿者ID');
            $table->text('author_name')->comment('コメント投稿者名');
            $table->text('author_url')->nullable()->comment('コメント投稿者URL');
            $table->text('body')->comment('コメント内容');
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
        Schema::dropIfExists($this->table);
    }
}
