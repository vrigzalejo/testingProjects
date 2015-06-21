<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 10:15 PM
 */

namespace ConsumerCloud\Brigs\Repositories;


use ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface;
use Fluent\Logger\FluentLogger;

class FluentRepository extends FluentLogger implements FluentInterface
{
    public function debug($msg) {
        $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Debug: '.$msg));
    }

    public function info($msg) {
        $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Info: '.$msg));
    }

    public function warn($msg) {
        $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Warning: '.$msg));
    }

    public function crit($msg) {
        $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Critical: '.$msg));
    }

    public function log($msg,$severity = 9) {
        switch ($severity) {
            case 0:
            case 1:
            case 2:
            case 3:
                $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Critical: '.$msg));
                break;
            case 4:
            case 5:
                $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Warning: '.$msg));
                break;
            case 6:
                $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Info: '.$msg));
                break;
            default:
                $this->post("brigs", array("message"=>date('Y-m-d H:i:s').' - Debug: '.$msg));
                break;
        }
    }
    
}