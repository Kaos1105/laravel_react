<?php

use App\Enums\ClientCompany\ClientClassificationEnum;
use App\Enums\ClientCompany\PaymentClassificationEnum;
use App\Enums\ClientCompany\SystemOperationEnum;
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
            $table->string('yomigana', 100)->nullable();
            $table->tinyInteger('operation_classification')->unsigned()->default(SystemOperationEnum::STOP);
            $table->date('usage_start_date');
            $table->date('usage_end_date');
            $table->string('billing_address', 100)->nullable();
            $table->string('contact_name', 50);
            $table->string('contact_phone', 13);
            $table->string('contact_email', 100);
            $table->date('next_billing_date')->nullable();
            $table->double('next_billing_amount')->nullable();
            $table->text('contract_history')->nullable();
            $table->tinyInteger('customer_classification')->unsigned()->default(ClientClassificationEnum::OKAYAMA);
            $table->tinyInteger('payment_classification')->unsigned()->default(PaymentClassificationEnum::NORMAL);
            $table->text('remark')->nullable();
            $table->tinyInteger('use_classification')->unsigned()->default(1);
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
