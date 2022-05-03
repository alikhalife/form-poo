<?php

class Html {

    public function stylesheet($href) {
        echo "<link rel='stylesheet' href='$href'>";
    }

    public function meta($attribute, $value) {
        echo "<meta $attribute='$value'>";
    }

    public function image($src, $alt) {
        echo "<img  src='$src' alt='$alt'>";
    }
}
