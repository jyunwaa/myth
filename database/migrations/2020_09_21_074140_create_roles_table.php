<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id()->comment('角色 ID');
            $table->string('username', 16)->comment('用户名')->unique();
            $table->char('password_hash', 60)->comment('密码 Hash');
            $table->string('email', 128)->comment('邮箱')->unique();
            $table->char('telephone', 11)->comment('手机号码')->unique();
//            $table->boolean('is_frozen')->comment('冻结状态')->default(true);

            $table->string('name', 8)->comment('名称')->unique();
            $table->enum('gender', ['男', '女'])->comment('性别');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
