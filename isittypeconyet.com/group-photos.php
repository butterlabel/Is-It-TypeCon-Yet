<?php
  $f = new phpFlickr("5c343192b818c364f59029ec3d22fcf4");
  $secret = "621ce9363ae13b0c";
  //$f->enableCache("fs", "/var/www/phpFlickrCache");
  //$f->enableCache("db", "mysql://scottsiteadmin:uuyt65dhd93er@localhost/typecon_flickr");
  $f->enableCache("db", "mysql://scottsiteadmin@localhost/typecon_flickr");
  
  
  $i = 1;
  // http://www.flickr.com/groups/typecon/
  $group_name = "typecon";
  $group_id = "85628044@N00";

  $grp = $f->groups_getInfo($group_id);
  // print_r($grp);

  // groups_pools_getPhotos(group_id, tags, user_id, extras, per_page, page)
  $group_photos = $f->groups_pools_getPhotos($group_id, NULL, NULL, NULL, NULL, 8);
  // print_r($group_photos);

  if(count($group_photos['photos']) >= 8) {
    // no matches
    echo "<p>Whoops.</p>";
  } else {
    // matches found
    // echo "<p>Matches found!</p>";
    echo "<ul class=\"group-photos\">";

    foreach((array)$group_photos['photos']['photo'] as $photo) {
      echo "<li><a href=\"http://flickr.com/photos/" . $photo['ownername'] . "/" . $photo['id'] . "/in/pool-typecon\" class=\"photo\">";
      echo "<img src=\"" . $f->buildPhotoURL($photo, "large_square") . "\" height=\"150\" width=\"150\" alt=\"" . htmlentities($photo['title']) . "\"></a></li>";
    }
    echo "</ul>";
  }

?>