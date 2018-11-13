<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 12.11.18
 * Time: 10:42
 */

namespace PFS\Generators;

use Smarty;

class HtmlFormGenerator
{
    protected $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }
}