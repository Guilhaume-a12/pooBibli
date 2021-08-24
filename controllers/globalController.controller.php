<?php

abstract class GlobalController {

    public static function addImage() {

        if(!empty($_FILES['image'])) {

            $info = pathinfo($_FILES['image']['name']);
            
            move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']."");

            $monImage = $_FILES['image']['name'];
            return $monImage;
            
        }
    }
}