<?php

use App\Enums\Common\UseFlagEnum;
use App\Enums\ClientUser\AccessAuthorityEnum;
use App\Enums\ClientUser\RoleIndicatorEnum;
use App\Enums\ClientUser\StatisticAggregationEnum;
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
            $table->rememberToken()->nullable();
            $table->tinyInteger('access_authority')->unsigned()->default(AccessAuthorityEnum::CIRCLE);
            $table->integer('display_order')->default(0);
            $table->tinyInteger('statistic_classification')->unsigned()->default(StatisticAggregationEnum::AGGREGATE);
            $table->tinyInteger('use_classification')->unsigned()->default(UseFlagEnum::USE);
            $table->text('note')->nullable();
            $table->integer('created_by')->unsigned()->index()->nullable();
            $table->integer('updated_by')->unsigned()->index()->nullable();
            $table->timestamps();
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
