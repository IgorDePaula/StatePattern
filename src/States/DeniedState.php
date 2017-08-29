<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:09
 */

namespace App\States;


class DeniedState extends AbstractDocumentState
{


    public function approve()
    {
        return new ApproveState();
    }

    public function __toString()
    {
        return 'DENIED';
    }
}