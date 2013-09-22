<?php
  $f = new phpFlickr("5c343192b818c364f59029ec3d22fcf4");
  //$secret = "621ce9363ae13b0c";
  //$flickr->enableCache("fs", "/var/www/phpFlickrCache");
  //$f->enableCache("db", "mysql://scottsiteadmin:uuyt65dhd93er@localhost/notebook_flickr");
  
  $i = 0;
  // http://www.flickr.com/groups/typecon/
  $group_name = "typecon";
  $group_id = "85628044@N00";

  //$grp = $f->groups_getInfo($group_id);
  //print_r($grp);

  $photos_number = 8;

  $group_photos = $f->groups_pools_getPhotos($group_id, NULL, NULL, NULL, $photos_number, NULL);
  //print_r($group_photos);


  if(count($group_photos['photos']) >= $photos_number) {
    // no matches
    echo "<p>Whoops.</p>";
  } else {
    // matches found
    foreach((array)$group_photos['photos']['photo'] as $photo) {
      echo "<li><a href=\"$group_photos$photo[id]\">";
      echo "<img src=\"" . $f->buildPhotoURL($photo, "Square") . "\" alt=\"" . htmlentities($photo['title']) . "\"></a></li>";
      $i++;
    }
  }
  

?>