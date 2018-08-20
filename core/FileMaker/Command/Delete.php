<?php
/**#@+
 * @ignore Include parent and delegate classes.
 */
require_once dirname(__FILE__) . '/../Command.php';
require_once dirname(__FILE__) . '/../Implementation/Command/DeleteImpl.php';
/**#@-*/

/**
 * Command class that deletes a single record.
 * Create this command with {@link FileMaker::newDeleteCommand()}.
 *
 * @package FileMaker
 */
class FileMaker_Command_Delete extends FileMaker_Command
{
    /**
     * Implementation
     *
     * @var FileMaker_Command_Delete_Implementation
     * @access private
     */
    var $_impl;

    /**
     * Delete command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the 
     *        command was created by.
     * @param string $layout Layout to delete record from.
     * @param string $recordId ID of the record to delete.
     */
    function FileMaker_Command_Delete($fm, $layout, $recordId)
    {
        $this->_impl = new FileMaker_Command_Delete_Implementation($fm, $layout, $recordId);
    }

}
