<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:03
 */

namespace App\States;

use Exception;

abstract class AbstractDocumentState implements DocumentStateInterface
{
    public function inAnalisis()
    {
        throw new Exception();
    }

    public function denied()
    {
        throw new Exception();
    }

    public function approve()
    {
        throw new Exception();
    }

    abstract public function __toString();
}