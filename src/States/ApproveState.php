<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:10
 */

namespace App\States;


class ApproveState extends AbstractDocumentState
{

    public function __toString()
    {
        return 'APPROVED';
    }
}