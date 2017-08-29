<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:09
 */

namespace App\States;


class InAnalisisState extends AbstractDocumentState
{

    public function denied()
    {
        return new DeniedState();
    }

    public function approve()
    {
        return new ApproveState();
    }

    public function __toString()
    {
        return 'IN_ANALISIS';
    }
}