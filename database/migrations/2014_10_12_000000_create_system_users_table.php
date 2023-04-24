<?php

use App\Enums\Common\UseFlagEnum;
use App\Enums\SystemUser\LockFlagEnum;
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
        Schema::create('system_users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('login_id', 100)->unique();
            $table->string('password');
            $table->tinyInteger('lock_flag')->unsigned()->default(LockFlagEnum::UNLOCKED);
            $table->tinyInteger('failure_count')->unsigned()->default(0);
            $table->dateTime('last_locked_at')->nullable();
            $table->integer('created_by')->unsigned()->nullable()->default(1);
            $table->integer('updated_by')->unsigned()->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_users');
    }
};
