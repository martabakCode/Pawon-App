<?php

use App\Models\AdditionalService;
use App\Models\Room;
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
        Schema::create('kitchens_additional_services', function (Blueprint $table) {
            $table->id();
            $table->integer('kitchen_id')->nullable();
            $table->integer('additional_service_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitchens_additional_services');
    }
};
