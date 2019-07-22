<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFundRecordsTable extends Migration { public function up() { Schema::create('fund_records', function (Blueprint $sp6ab302) { $sp6ab302->increments('id'); $sp6ab302->integer('user_id')->index(); $sp6ab302->integer('type')->default(\App\FundRecord::TYPE_OUT); $sp6ab302->integer('amount'); $sp6ab302->integer('balance')->default(0); $sp6ab302->integer('order_id')->nullable(); $sp6ab302->string('withdraw_id')->nullable(); $sp6ab302->string('remark')->nullable(); $sp6ab302->timestamps(); }); DB::unprepared('ALTER TABLE `fund_records` CHANGE COLUMN `created_at` `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP;'); } public function down() { Schema::dropIfExists('fund_records'); } }