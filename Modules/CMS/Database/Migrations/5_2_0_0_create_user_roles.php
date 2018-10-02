<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRoles extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glob_user_roles', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('admin')->default(1);
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::table('glob_user_rol_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('user_role_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('locale',20)->index();

            $table->unique(['user_role_id','locale'], 'ku_roles_locale_unique');
            $table->foreign('user_role_id', 'fk_gurt_roles')->references('id')->on('glob_user_roles')->onDelete('cascade');
        });

        $date = new Carbon;

        DB::table('glob_user_roles')->insert(
            array(
                array(
                    'admin' => 2,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'admin' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'admin' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'admin' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'admin' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                )
            )
        );

        DB::table('glob_user_rol_translations')->insert(
            array(
                array(
                    'user_role_id' => 1,
                    'name' => 'Coaster Superuser',
                    'description' => 'Unrestricted Account (can only be removed by superusers)',
                    'locale' => 'en'
                ),
                array(
                    'user_role_id' => 2,
                    'name' => 'Coaster Admin',
                    'description' => 'Default Admin Account',
                    'locale' => 'en'
                ),
                array(
                    'user_role_id' => 3,
                    'name' => 'Coaster Editor',
                    'description' => 'Default Editor Account',
                    'locale' => 'en'
                ),
                array(
                    'user_role_id' => 4,
                    'name' => 'Coaster Account (Login Access Only)',
                    'description' => 'Base Account With Login Access',
                    'locale' => 'en'
                ),
                array(
                    'user_role_id' => 5,
                    'name' => 'Frontend Guest Account',
                    'description' => 'Default Guest Account (no admin access)',
                    'locale' => 'en'
                )
            )
        );
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}