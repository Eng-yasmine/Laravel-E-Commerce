<?php

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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->softDeletes(); // في migrations, نضيف هذا السطر لتفعيل الحذف الناعم
            // هذا السطر يضيف عمود الحذف الناعم
            // الذي يسمح بحذف السجلات دون حذفها فعليًا من قاعدة البيانات
            // يمكن استرجاعها لاحقًا إذا لزم الأمر
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
