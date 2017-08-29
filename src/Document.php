<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29/08/17
 * Time: 12:11
 */

namespace App;


use App\States\DocumentStateInterface;

class Document implements DocumentStateInterface
{
    /*
     * @var string
     */
    private $name = '';
    /*
     * @var AbstractDocumentState
     */
    private $state = '';

    /**
     * Document constructor.
     * @param string $name
     * @param string $state
     */
    public function __construct($name, DocumentStateInterface $state)
    {
        $this->name = $name;
        $this->setState($state);
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function inAnalisis()
    {
        $this->setState($this->getState()->inAnalisis());
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param DocumentStateInterface $state
     */
    public function setState(DocumentStateInterface $state)
    {
        $this->state = $state;
    }

    public function denied()
    {
        $this->setState($this->getState()->denied());
    }

    public function approve()
    {
        $this->setState($this->getState()->approve());
    }
}