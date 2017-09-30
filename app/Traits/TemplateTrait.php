<?php
namespace App\Http\Traits;

trait TemplateTrait {

    public function getBreadCrumbs($section, $current = []) {
        $bc = array_merge($this->breadcrumbs, $section);
        return array_merge($bc, $current);
    }

    public function slugify($text) {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);


        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}