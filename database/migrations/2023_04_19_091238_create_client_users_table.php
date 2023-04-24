<?php

use App\Enums\Common\UseFlagEnum;
use App\Enums\ClientUser\AccessAuthorityEnum;
use App\Enums\ClientUser\RoleIndicatorEnum;
use App\Enums\ClientUser\StatisticAggregationEnum;
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
        Schema::create('client_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_company_id')->constrained(
                table: 'client_companies'
            )->cascadeOnDelete();
            $table->string('code', 10);
            $table->string('name', 100);
            $table->tinyInteger('role_indicator')->unsigned()->default(RoleIndicatorEnum::MEMBER);
            $table->string('position', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('login_id', 100)->unique();
            $table->string('password');
            $table->tinyInteger('lock_flag')->unsigned()->default(LockFlagEnum::UNLOCKED);
            $table->tinyInteger('failure_count')->unsigned()->default(0);
            $table->dateTime('last_locked_at')->nullable();
            $table->tinyInteger('access_authority')->unsigned()->default(AccessAuthorityEnum::CIRCLE);
            $table->integer('display_order')->default(0);
            $table->tinyInteger('statistic_classification')->unsigned()->default(StatisticAggregationEnum::AGGREGATE);
            $table->tinyInteger('use_classification')->unsigned()->default(UseFlagEnum::USE);
            $table->text('note')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->dateTime('last_access_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_users');
    }
};
