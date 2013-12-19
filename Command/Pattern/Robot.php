<?php

namespace Pattern;

/**
 * Class Robot
 *
 * Our receiver class.
 * Rather than actually track the progress of a simulated robot, each method outputs some text to the console to
 * explain the action that would have occurred in the real system.
 */
class Robot
{
    /**
     * @param int $forwardDistance
     */
    public function move($forwardDistance)
    {
        if ($forwardDistance > 0) {
            echo sprintf('Robot moved forwards %s mm.', $forwardDistance);
        } else {
            echo sprintf('Robot moved backwards %s mm.', -$forwardDistance);
        }
    }

    /**
     * @param int $degrees
     */
    public function rotateLeft($degrees)
    {
        if ($degrees > 0) {
            echo sprintf('Robot rotated left %s degrees.', $degrees);
        } else {
            echo sprintf('Robot rotated right %s degrees.', -$degrees);
        }
    }

    /**
     * @param boolean $upwards
     */
    public function scoop($upwards)
    {
        if ($upwards === true) {
            echo "Robot gathered soil in scoop.";
        } else {
            echo "Robot released scoop contents.";
        }
    }
}