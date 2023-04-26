<?php

use App\Enums\ClientCompany\ClientClassificationEnum;
use App\Enums\ClientCompany\PaymentClassificationEnum;
use App\Enums\ClientCompany\SystemOperationEnum;
use App\Enums\Common\UseFlagEnum;
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
        Schema::create('client_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('name_kana', 100)->nullable();
            $table->tinyInteger('operation_classification')->unsigned()->default(SystemOperationEnum::STOP);
            $table->date('date_start');
            $table->date('date_end');
            $table->string('bill_to', 100)->nullable();
            $table->string('in_charge_name', 50);
            $table->string('in_charge_tel', 13);
            $table->string('in_charge_email', 100);
            $table->dateTime('next_billing_date')->nullable();
            $table->double('next_billing_amount')->nullable();
            $table->text('contract_history')->nullable();
            $table->tinyInteger('client_classification')->unsigned()->default(ClientClassificationEnum::OKAYAMA);
            $table->tinyInteger('payment_classification')->unsigned()->default(PaymentClassificationEnum::NORMAL);
            $table->text('note')->nullable();
            $table->tinyInteger('use_classification')->unsigned()->default(UseFlagEnum::USE);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_companies');
    }
};
