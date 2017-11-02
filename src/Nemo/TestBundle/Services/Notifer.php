<?php

use Nemo\TestBundle\Services;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.11.2017
 * Time: 12:56
 */
class Notifer
{
    protected $mailer;
    protected $templater;

    public function __construct(SwiftMailer $mailer,Twig)
    {
        $this->mailer = $mailer;
        $this->templater =$templater;
    }


}