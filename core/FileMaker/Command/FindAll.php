<?php
/**#@+
 * @ignore Include parent and delegate classes.
 */
require_once dirname(__FILE__) . '/Find.php';
require_once dirname(__FILE__) . '/../Implementation/Command/FindAllImpl.php';
/**#@-*/

/**
 * Command class that finds all records from a layout. 
 * Create this command with {@link FileMaker::newFindAllCommand()}.
 *
 * @package FileMaker
 */
class FileMaker_Command_FindAll extends FileMaker_Command_Find
{
    /**
     * Implementation
     *
     * @var FileMaker_Command_FindAll_Implementation
     * @access private
     */
    var $_impl;

    /**
     * FindAll command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the 
     *        command was created by.
     * @param string $layout Layout to find all records in.
     */
    function FileMaker_Command_FindAll($fm, $layout)
    {
        $this->_impl = new FileMaker_Command_FindAll_Implementation($fm, $layout);
    }

}
