<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:15
 */

namespace App\States;


interface DocumentStateInterface
{
    public function inAnalisis();

    public function denied();

    public function approve();
}