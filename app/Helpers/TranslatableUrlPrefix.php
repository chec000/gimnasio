<?php
/**
 * Created by PhpStorm.
 * User: vicente.gutierrez
 * Date: 19/06/18
 * Time: 10:54
 */

namespace App\Helpers;



use Illuminate\Support\Facades\Config;

class TranslatableUrlPrefix {

    public static function getTranslatablePrefixes() {
        return Config::get('routes_prefixes');
    }

    public static function getTranslatablePrefixesByIndex($index) {
        return Config::get('routes_prefixes')[$index];
    }

    public static function getTranslatablePrefixByIndexAndLang($index, $lang) {
        return Config::get('routes_prefixes')[$index][$lang];
    }

    public static function getRouteName($lang, $indexes) {
        $routeIndexes = [];

        foreach ($indexes as $index) {
            $prefixTranslated = isset(Config::get('routes_prefixes')[$index][$lang]) ? Config::get('routes_prefixes')[$index][$lang] : $index;
            $routeIndexes[]   = $prefixTranslated;
        }

        return implode('.', $routeIndexes);
    }

    public static function isValidPrefix($prefix, $lang, $index) {
        $prefixTranslated = self::getTranslatablePrefixByIndexAndLang($index, $lang);
        return $prefixTranslated == $prefix;
    }

    public static function isFromIndex($prefix, $index) {
        $itIs = false;

        $prefixes = self::getTranslatablePrefixesByIndex($index);
        foreach ($prefixes as $p) {
            if ($p == $prefix) {
                $itIs = true;
            }
        }

        return $itIs;
    }
}
