<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminActions extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('glob_admin_actions', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('controller_id');
            $table->string('action');
            $table->integer('inherit')->default(0);
            $table->integer('edit_based')->default(0);
            $table->boolean('active')->default(1);
            $table->timestamps();

            //$table->foreign('controller_id','fk_gaa_controllers')->references('id')->on('glob_admin_controllers');
        });

        Schema::table('glob_admin_action_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('admin_action_id');
            $table->string('name');
            $table->text('about')->nullable();
            $table->string('locale',20)->index();

            $table->unique(['admin_action_id','locale'], 'ku_action_locale_unique');
            $table->foreign('admin_action_id','fk_gaat_actions')->references('id')->on('glob_admin_actions')->onDelete('cascade');
        });

        $date = new Carbon;

        DB::table('glob_admin_actions')->insert(
            array(
                array(
                    'controller_id' => 1,
                    'action' => 'index',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 1,
                    'action' => 'logs',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 1,
                    'action' => 'your-requests',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 1,
                    'action' => 'requests',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'sort',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'add',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'edit',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'delete',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'version-publish',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'version-rename',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'versions',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'request-publish',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'request-publish-action',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'requests',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 2,
                    'action' => 'tinymce-page-list',
                    'inherit' => 5,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 3,
                    'action' => 'pages',
                    'inherit' => 5,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 4,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 4,
                    'action' => 'sort',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 4,
                    'action' => 'add',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 4,
                    'action' => 'delete',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 4,
                    'action' => 'rename',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 4,
                    'action' => 'get-levels',
                    'inherit' => 19,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 4,
                    'action' => 'save-levels',
                    'inherit' => 22,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 5,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 6,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 6,
                    'action' => 'edit',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 7,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 7,
                    'action' => 'edit',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 7,
                    'action' => 'import',
                    'inherit' => 29,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 8,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 8,
                    'action' => 'password',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 8,
                    'action' => 'blog',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 9,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 9,
                    'action' => 'update',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 9,
                    'action' => 'search',
                    'inherit' => 35,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 9,
                    'action' => 'validate-db',
                    'inherit' => 35,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 9,
                    'action' => 'wp-login',
                    'inherit' => 33,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 10,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 10,
                    'action' => 'edit',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 10,
                    'action' => 'add',
                    'inherit' => 40,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 10,
                    'action' => 'delete',
                    'inherit' => 40,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 11,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 11,
                    'action' => 'add',
                    'inherit' => 43,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 11,
                    'action' => 'edit',
                    'inherit' => 43,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 11,
                    'action' => 'delete',
                    'inherit' => 43,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 11,
                    'action' => 'actions',
                    'inherit' => 43,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 11,
                    'action' => 'pages',
                    'inherit' => 43,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 12,
                    'action' => 'restore',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 12,
                    'action' => 'undo',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 13,
                    'action' => 'index',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 14,
                    'action' => 'list',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 14,
                    'action' => 'edit',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 14,
                    'action' => 'update',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 14,
                    'action' => 'sort',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 14,
                    'action' => 'upload',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 14,
                    'action' => 'delete',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 14,
                    'action' => 'caption',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 15,
                    'action' => 'list',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 15,
                    'action' => 'submissions',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 15,
                    'action' => 'csv',
                    'inherit' => 0,
                    'edit_based' => 1,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 16,
                    'action' => 'index',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 16,
                    'action' => 'update',
                    'inherit' => 62,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 16,
                    'action' => 'beacons',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 16,
                    'action' => 'beacons-update',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 9,
                    'action' => 'keys',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 8,
                    'action' => 'page-state',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 8,
                    'action' => 'language',
                    'inherit' => -1,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                ),
                array(
                    'controller_id' => 9,
                    'action' => 'upgrade',
                    'inherit' => 0,
                    'edit_based' => 0,
                    'created_at' => $date,
                    'updated_at' => $date
                )
            ));

        //glob_admin_action_translations
        DB::table('glob_admin_action_translations')->insert(
            array(
                array(
                    'admin_action_id' => 1,
                    'name' => 'Dashboard',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 2,
                    'name' => 'View Admin Logs',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 3,
                    'name' => 'View publish requests',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 4,
                    'name' => 'View requests to moderate',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 5,
                    'name' => 'Show Page Management',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 6,
                    'name' => 'Sort Pages',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 7,
                    'name' => 'Add Pages',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 8,
                    'name' => 'Edit Pages',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 9,
                    'name' => 'Delete Pages',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 10,
                    'name' => 'Publish Versions',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 11,
                    'name' => 'Rename Versions',
                    'about' => 'required to be logged is as author or have publishing permission',
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 12,
                    'name' => 'Ajax Versions Table',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 13,
                    'name' => 'Make Requests',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 14,
                    'name' => 'Action Requests (cancel/approve/deny)',
                    'about' => 'required to be logged in as author to cancel or else have publish permissions',
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 15,
                    'name' => 'Ajax Requests Table',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 16,
                    'name' => 'TinyMce Page Links',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 17,
                    'name' => 'List Group Pages',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 18,
                    'name' => 'Show Menu Items',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 19,
                    'name' => 'Sort Menu Items',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 20,
                    'name' => 'Add Menu Items',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 21,
                    'name' => 'Delete Menu Items',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 22,
                    'name' => 'Rename Menu Items',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 23,
                    'name' => 'Get Subpage Level',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 24,
                    'name' => 'Set Subpage Level',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 25,
                    'name' => 'Edit Site-wide Content',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 26,
                    'name' => 'View Files',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 27,
                    'name' => 'Manage Files',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 28,
                    'name' => 'View Redirects',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 29,
                    'name' => 'Manage Redirects',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 30,
                    'name' => 'Import Redirects',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 31,
                    'name' => 'Show Account Settings',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 32,
                    'name' => 'Change Password',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 33,
                    'name' => 'Auto Blog Login',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 34,
                    'name' => 'Show System Settings',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 35,
                    'name' => 'Updates System Settings',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 36,
                    'name' => 'Rebuild Search Indexes',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 37,
                    'name' => 'Validate Database',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 38,
                    'name' => 'WordPress Auto Login Script',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 39,
                    'name' => 'View User List',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 40,
                    'name' => 'Edit Users',
                    'about' => 'can edit roles of users (restricted by admin level)',
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 41,
                    'name' => 'Add Users',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 42,
                    'name' => 'Remove Users',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 43,
                    'name' => 'Role Management',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 44,
                    'name' => 'Add Roles',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 45,
                    'name' => 'Edit Roles',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 46,
                    'name' => 'Delete Roles',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 47,
                    'name' => 'Ajax Get Role Actions',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 48,
                    'name' => 'Set Per Page Actions',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 49,
                    'name' => 'Restore Deleted Item From Any User',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 50,
                    'name' => 'Undo Own Actions',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 51,
                    'name' => 'Create Repeater Row',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 52,
                    'name' => 'Gallery List',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 53,
                    'name' => 'Edit Galleries',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 54,
                    'name' => 'Run Gallery Upload Manager',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 55,
                    'name' => 'Sort Images',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 56,
                    'name' => 'Upload Images',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 57,
                    'name' => 'Delete Images',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 58,
                    'name' => 'Edit Captions',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 59,
                    'name' => 'Forms List',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 60,
                    'name' => 'View Form Submissions',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 61,
                    'name' => 'Export Form Submissions',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 62,
                    'name' => 'Show Theme Management',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 63,
                    'name' => 'Theme Block Updater',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 64,
                    'name' => 'Import Beacons',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 65,
                    'name' => 'Update Beacon Blocks',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 66,
                    'name' => 'Request browser API keys',
                    'about' => 'only keys with the string browser in can be called',
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 67,
                    'name' => 'Save page list state',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 68,
                    'name' => 'Change current language',
                    'about' => null,
                    'locale' => 'en'
                ),
                array(
                    'admin_action_id' => 69,
                    'name' => 'Upgrade CMS',
                    'about' => null,
                    'locale' => 'en'
                )
            ));

    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {

    }

}