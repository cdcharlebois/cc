<?php
/**
 * Created by PhpStorm.
 * User: charlebo
 * Date: 12/9/14
 * Time: 1:08 PM
 */
class PeeController extends BaseController
{
    public function index()
    {
        return "hello";
    }

    public function sendToBathroom($guyId, $urinalId)
    {
        // code to send the guy to the urinal
    }

    private function passTime()
    {
        // code to update guys
        //   guys in bathroom lose pee equal to peeSpeed
        //   guys at bar gain pee equal to drinkSpeed
        //   guys in bathroom with pee == 0 return to bar
    }

    private function getNeighborsOf($guyId)
    {
        $guy = Guy::find($guyId);
        $guyLocation = explode('-', $guy->location);
        $neighbors = [];
        if ($guyLocation[0] == 'u'){
            $neighbors[] = Guy::whereLocation('u' . $guyLocation[1]*1-1)->first();
            $neighbors[] = Guy::whereLocation('u' . $guyLocation[1]*1+1)->first();
        }
        return $neighbors;
    }
}