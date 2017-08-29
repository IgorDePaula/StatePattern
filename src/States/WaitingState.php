<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:08
 */

namespace App\States;


class WaitingState extends AbstractDocumentState
{

    public function inAnalisis()
    {
        return new InAnalisisState();
    }

    public function __toString()
    {
        return 'WAITING';
    }
}