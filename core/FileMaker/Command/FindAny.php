<?php
/**#@+
 * @ignore Include parent and delegate classes.
 */
require_once dirname(__FILE__) . '/Find.php';
require_once dirname(__FILE__) . '/../Implementation/Command/FindAnyImpl.php';
/**#@-*/

/**
 * Command class that finds one random record.
 * Create this command with {@link FileMaker::newFindAnyCommand()}.
 *
 * @package FileMaker
 */
class FileMaker_Command_FindAny extends FileMaker_Command_Find
{
    /**
     * Implementation
     *
     * @var FileMaker_Command_FindAny_Implementation
     * @access private
     */
    var $_impl;

    /**
     * FindAny command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the 
     *        command was created by.
     * @param string $layout Layout to find a random record from.
     */
    function FileMaker_Command_FindAny($fm, $layout)
    {
        $this->_impl = new FileMaker_Command_FindAny_Implementation($fm, $layout);
    }

}
