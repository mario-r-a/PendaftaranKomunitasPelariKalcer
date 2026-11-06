<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ganti kolom `distance` dengan field yang lebih kontekstual
     * untuk konteks komunitas pelari.
     */
    public function up(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            if (Schema::hasColumn('registrations', 'distance')) {
                $table->dropColumn('distance');
            }
            if (! Schema::hasColumn('registrations', 'kategori_lari')) {
                $table->string('kategori_lari')->after('phone');
            }
            if (! Schema::hasColumn('registrations', 'level_pengalaman')) {
                $table->string('level_pengalaman')->after('kategori_lari');
            }
        });
    }

    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn(['kategori_lari', 'level_pengalaman']);
            $table->unsignedSmallInteger('distance')->nullable();
        });
    }
};
