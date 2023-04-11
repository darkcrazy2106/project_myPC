<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id')->nullable();;
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('email');
            $table->text('comment');
            $table->tinyInteger('rating')->nullable()->unsigned()->default(0);
            $table->timestamps();
        });
        // Add a constraint to limit the rating value between 0 and 5
        DB::statement("ALTER TABLE feedback MODIFY COLUMN rating tinyint(1) UNSIGNED NOT NULL DEFAULT 0 CHECK (rating >= 0 AND rating <= 5)");
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
