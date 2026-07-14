<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->string('path');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();

            $table->index(['project_id', 'sort_order']);
        });

        foreach (DB::table('projects')->select('id', 'image')->get() as $row) {
            $path = $this->normalizeLegacyImagePath($row->image ?? null);
            if ($path !== null) {
                DB::table('project_images')->insert([
                    'project_id' => $row->id,
                    'path' => $path,
                    'sort_order' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_images');

        Schema::table('projects', function (Blueprint $table) {
            $table->string('image')->nullable()->after('description');
        });
    }

    private function normalizeLegacyImagePath(mixed $raw): ?string
    {
        if ($raw === null || $raw === '') {
            return null;
        }

        if (! is_string($raw)) {
            return null;
        }

        $t = trim($raw);
        if ($t === '' || $t === '[]') {
            return null;
        }

        if (str_starts_with($t, '[')) {
            $decoded = json_decode($t, true);
            if (! is_array($decoded) || $decoded === []) {
                return null;
            }
            $first = $decoded[0] ?? null;

            return is_string($first) && $first !== '' ? $first : null;
        }

        return $t;
    }
};
