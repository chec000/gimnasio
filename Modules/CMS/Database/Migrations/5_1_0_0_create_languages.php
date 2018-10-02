 <?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguages extends Migration
{

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glob_languages', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->string('locale_key',10);
            $table->string('corbiz_key',10);
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::table('glob_language_translations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('language_id');
            $table->string('language');
            $table->string('language_country');
            $table->string('locale',20)->index();

            $table->unique(['language_id','locale'], 'glt_lang_locale_unique');
            $table->foreign('language_id','fk_glt_lang')->references('id')->on('glob_languages')->onDelete('cascade');
        });

        $date = new Carbon;

        DB::table('glob_languages')->insert(
            array(
                array(
                    'locale_key' => 'en',
                    'created_at' => $date,
                    'updated_at' => $date
                )
            )
        );

        DB::table('glob_language_translations')->insert(
            array(
                array(
                    'language_id' => 1,
                    'language' => 'English',
                    'language_country' => 'English',
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