<?php
/**#@+
 * @ignore Include parent and delegate classes.
 */
require_once dirname(__FILE__) . '/../Command.php';
require_once dirname(__FILE__) . '/../Implementation/Command/DuplicateImpl.php';
/**#@-*/

/**
 * Command class that duplicates a single record.
 * Create this command with {@link FileMaker::newDuplicateCommand()}.
 *
 * @package FileMaker
 */
class FileMaker_Command_Duplicate extends FileMaker_Command
{
    /**
     * Implementation
     *
     * @var FileMaker_Command_Duplicate_Implementation
     * @access private
     */
    var $_impl;

    /**
     * Duplicate command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the 
     *        command was created by.
     * @param string $layout Layout the record to duplicate is in.
     * @param string $recordId ID of the record to duplicate.
     */
    function FileMaker_Command_Duplicate($fm, $layout, $recordId)
    {
        $this->_impl = new FileMaker_Command_Duplicate_Implementation($fm, $layout, $recordId);
    }

}
