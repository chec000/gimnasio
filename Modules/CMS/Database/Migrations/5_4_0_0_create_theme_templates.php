<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_theme_templates', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->unsignedInteger('theme_id');
            $table->unsignedInteger('template_id');
            $table->string('label')->nullable();
            $table->integer('child_template')->nullable();
            $table->integer('hidden')->nullable();
            $table->timestamps();

            $table->foreign('theme_id','fk_ctt_themes')->references('id')->on('cms_themes');
            $table->foreign('template_id','fk_ctt_tmeplates')->references('id')->on('cms_templates');
        });

        $themeTemplates = [];
        $deleteTemplateIds = [];
        $templatesFound = [];
        $templates = DB::table('cms_templates')->get();
        foreach ($templates as $template) {
            if (array_key_exists($template->template, $templatesFound)) {
                $deleteTemplateIds[] = $template->id;
            } else {
                $templatesFound[$template->template] = $template;
            }
            $themeTemplate = array_diff_key((array) $template, array_fill_keys(['template'], ''));
            foreach (['child_template', 'hidden'] as $attribute) {
                if ($templatesFound[$template->template]->$attribute == $themeTemplate[$attribute]) {
                    $themeTemplate[$attribute] = null;
                }
            }
            $themeTemplate['template_id'] = $templatesFound[$template->template]->id;
            $themeTemplates[] = $themeTemplate;
        }


        DB::table('cms_theme_templates')->insert($themeTemplates);
        DB::table('cms_templates')->whereIn('id', $deleteTemplateIds)->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }

}
