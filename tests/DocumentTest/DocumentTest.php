<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 16:09
 */

namespace DocumentTest;

use App\Document;
use App\States\ApproveState;
use App\States\DeniedState;
use App\States\InAnalisisState;
use App\States\WaitingState;

class DocumentTest extends \PHPUnit_Framework_TestCase
{
    protected $obj = null;

    public function setUp()
    {
        parent::setUp();

        $this->obj = new Document('RG', new WaitingState());
    }

    public function testInitialState()
    {
        $this->assertEquals(new WaitingState(), $this->obj->getState());
    }

    public function testInAnalisesState()
    {
        $this->obj->inAnalisis();
        $this->assertEquals(new InAnalisisState(), $this->obj->getState());
    }

    public function testDenyState()
    {
        $obj = new Document('RG', new WaitingState());
        $obj->inAnalisis();
        $obj->denied();
        $this->assertEquals(new DeniedState(), $obj->getState());
    }

    public function testApproveState()
    {
        $obj = new Document('RG', new WaitingState());
        $obj->inAnalisis();
        $obj->approve();
        $this->assertEquals(new ApproveState(), $obj->getState());
    }

    /**
     * @expectedException LogicException
     */
    public function testApproveStateException()
    {
        $obj = new Document('RG', new WaitingState());
        $obj->approve();
        $this->assertEquals(new ApproveState(), $obj->getState());
    }

    /**
     * @expectedException LogicException
     */
    public function testDeniedStateException()
    {
        $obj = new Document('RG', new WaitingState());
        $obj->denied();
        $this->assertEquals(new DeniedState(), $obj->getState());
    }

}
