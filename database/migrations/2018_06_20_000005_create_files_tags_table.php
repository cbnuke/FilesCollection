<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTagsTable extends Migration
{
   /**
     * Run the migrations.
     * @table files_tags
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('files_id')->index();
            $table->unsignedBigInteger('tags_id')->index();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('files_id')
                ->references('id')->on('files')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tags_id')
                ->references('id')->on('tags')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
        Schema::dropIfExists('files_tags');
     }
}
