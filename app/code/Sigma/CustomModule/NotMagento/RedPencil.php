<?php
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 27/11/20
 * Time: 1:20 PM
 */

namespace Sigma\CustomModule\NotMagento;


class RedPencil implements PencilInterface
{
        public function getPencilType(){
            return "Red Pencil";
        }
}