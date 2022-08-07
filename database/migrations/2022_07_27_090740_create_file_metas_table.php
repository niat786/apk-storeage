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
        Schema::create('file_metas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id');
            $table->foreignId('domain_id');
            $table->string('uploading_type')->default('url');
            $table->string('b2_account_type')->default('personal');
            $table->string('b2_account_id');
            $table->string('download_link');
            $table->string('size');
            $table->string('extension');
            $table->string('dmca_counts')->default('0');
            $table->softDeletes();
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
        Schema::dropIfExists('file_metas');
    }
};
