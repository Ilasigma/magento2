<?php
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 28/11/20
 * Time: 3:09 PM
 */

namespace Sigma\CustomModule\Model;

use Sigma\CustomModule\Api\Size;
class Big implements Size
{

    public function getSize()
    {
      return "Big size";  // TODO: Implement getSize() method.
    }
}