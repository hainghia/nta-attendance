<?php

namespace App\Helpers;

class Helper
{
  /**
   * Get an SVG Icon
   *
   * @param string $icon the icon name.
   * @param bool   $base if the baseline class should be added.
   */
  public static function fetch_svg_icon($key)
  {
    $path = resource_path('assets/svg/svgs.json');
    $json = json_decode(file_get_contents($path), true);
    echo $json[$key];
  }
}
