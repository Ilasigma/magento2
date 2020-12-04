<?php
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 28/11/20
 * Time: 3:06 PM
 */

namespace Sigma\CustomModule\Model;

use Sigma\CustomModule\Api\Color;
class Red implements Color
{

    public function getColor()
    {
      return "Red Color";  // TODO: Implement getColor() method.
    }
}