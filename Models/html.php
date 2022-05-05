<?php

class Html {

    public function stylesheet($href) {
        echo "<link rel='stylesheet' href='$href'>";
    }

    public function meta($attribute, $value) : string {
        return "<meta $attribute=$value>";
    }

    public function image($src, $alt) {
        echo "<div><img  src='$src' alt='$alt'></div>";
    }

    public function link($href, $description){
        echo "<a href='$href'>$description</a>";
    }

    public function script($type){
        echo "<script type='$type'>";
    }
}
?>
