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
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'title')) {
                $table->string('title')->after('id');
            }

            if (!Schema::hasColumn('projects', 'description')) {
                $table->text('description')->after('title');
            }

            if (!Schema::hasColumn('projects', 'analysis')) {
                $table->text('analysis')->nullable()->after('description');
            }

            if (!Schema::hasColumn('projects', 'architecture')) {
                $table->text('architecture')->nullable()->after('analysis');
            }

            if (!Schema::hasColumn('projects', 'tech_stack')) {
                $table->string('tech_stack')->nullable()->after('architecture');
            }

            if (!Schema::hasColumn('projects', 'image')) {
                $table->string('image')->nullable()->after('tech_stack');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'image')) {
                $table->dropColumn('image');
            }

            if (Schema::hasColumn('projects', 'tech_stack')) {
                $table->dropColumn('tech_stack');
            }

            if (Schema::hasColumn('projects', 'architecture')) {
                $table->dropColumn('architecture');
            }

            if (Schema::hasColumn('projects', 'analysis')) {
                $table->dropColumn('analysis');
            }

            if (Schema::hasColumn('projects', 'description')) {
                $table->dropColumn('description');
            }

            if (Schema::hasColumn('projects', 'title')) {
                $table->dropColumn('title');
            }
        });
    }
};
