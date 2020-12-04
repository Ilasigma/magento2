<?php
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 27/11/20
 * Time: 1:18 PM
 */

namespace Sigma\CustomModule\NotMagento;


class YellowPencil implements PencilInterface
{

    public function getPencilType()
    {
      return "Yellow Pencil";  // TODO: Implement getPencilType() method.
    }
}