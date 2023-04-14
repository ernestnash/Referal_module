<?php

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
        Schema::create('nhdds', function (Blueprint $table) {
            $table->string('id');
            $table->string('public access');
            $table->string('created at');
            $table->string('updated at');
            $table->string('created_by_id');
            $table->string('updated_by_id');
            $table->string('is active');
            $table->string('extras');
            $table->string('uri');
            $table->string('version');
            $table->string('released');
            $table->string('retired');
            $table->string('is latest version');
            $table->string('custom validation schema');
            $table->string('parent_id');
            $table->string('map type');
            $table->string('sort weight');
            $table->string('external id');
            $table->string('comment');
            $table->string('versioned_object_id');
            $table->string('mnemonic');
            $table->string('from_concept_id');
            $table->string('to_concept_id');
            $table->string('to_source_id');
            $table->string('from_source_id');
            $table->string('from concept code');
            $table->string('from concept name');
            $table->string('from source url');
            $table->string('from source version');
            $table->string('to concept code');
            $table->string('to concept name');
            $table->string('to source url');
            $table->string('to source version');
            $table->string('counted');
            $table->string('index');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhdds');
    }
};
