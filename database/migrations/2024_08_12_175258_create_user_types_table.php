<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->char('type_id', 4);
            $table->string('code', 20);
            $table->string('name', 40);
            $table->integer('order');
        });

        DB::table('user_types')->insert([
            ['type_id' => '1001', 'code' => 'admin', 'name' => 'Admin', 'order' => 0],
            ['type_id' => '1002', 'code' => 'client', 'name' => 'Client', 'order' => 0],
            ['type_id' => '1003', 'code' => 'support', 'name' => 'Support', 'order' => 0],
            ['type_id' => '1004', 'code' => 'accounts', 'name' => 'Accounts', 'order' => 0],
            ['type_id' => '1005', 'code' => 'billing', 'name' => 'Branch Manager', 'order' => 0],
            ['type_id' => '1006', 'code' => 'ets', 'name' => 'Technical Support', 'order' => 0],
            ['type_id' => '1007', 'code' => 'breseller', 'name' => 'BReseller', 'order' => 0],
            ['type_id' => '1008', 'code' => 'mreseller', 'name' => 'MReseller', 'order' => 0],
            ['type_id' => '1009', 'code' => 'billing_manager', 'name' => 'Billing', 'order' => 0],
            ['type_id' => '1010', 'code' => 'support_manager', 'name' => 'Support Manager', 'order' => 0],
            ['type_id' => '1011', 'code' => 'guest', 'name' => 'Guest', 'order' => 0]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};
