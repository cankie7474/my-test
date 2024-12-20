<?php

namespace Cankie7474\MyTest;

use Cocur\Slugify\Slugify;

class MyUrl
{
    function slugify($url, $link)
    {
        $slugify = new Slugify();

        return $url . "/" . $link;
    }
}