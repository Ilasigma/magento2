<?php
namespace Sigma\CustomModule\Model;

use Sigma\CustomModule\Api\PencilInterface;
use Sigma\CustomModule\Api\Color;
use Sigma\CustomModule\Api\Size;

/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 28/11/20
 * Time: 2:47 PM
 */
class Pencil implements PencilInterface
{
    protected $color;
    protected $size;

    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getPencilType()
    {
        //return "parimal";
        return "Our Pencil has" . $this->color->getColor() . " and" . $this->size->getSize() . "size"; // TODO: Implement getPencilType() method.
    }
}