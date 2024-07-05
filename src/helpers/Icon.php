<?php
namespace Mesmac\OortCloudIms\Helpers;

class Icon {
    public static function render($name, $class = '') {
        return "<i style='color: white' class='fas fa-{$name} {$class}'></i>";
    }
}