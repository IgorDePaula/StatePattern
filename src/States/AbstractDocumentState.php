<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:03
 */

namespace App\States;

use LogicException;

abstract class AbstractDocumentState implements DocumentStateInterface
{
    public function inAnalisis()
    {
        throw new LogicException("This document can't be in analisis");
    }

    public function denied()
    {
        throw new LogicException("This document can't be denied");
    }

    public function approve()
    {
        throw new LogicException("This document can't be approved");
    }

    abstract public function __toString();
}