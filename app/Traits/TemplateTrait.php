<?php
namespace App\Http\Traits;

trait TemplateTrait {

    public function getBreadCrumbs($section, $current) {
        $bc = array_merge($this->breadcrumbs, $section);
        return array_merge($bc, $current);
    }
}