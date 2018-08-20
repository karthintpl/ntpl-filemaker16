<?php
/**#@+
 * @ignore Include parent and delegate classes.
 */
require_once dirname(__FILE__) . '/../Command.php';
require_once dirname(__FILE__) . '/../Implementation/Command/FindRequestImpl.php';
/**#@-*/

/**
 * Find Request class. Contains all the information about a single find request 
 * for a Compound Find command.
 * Create this command with {@link FileMaker::newFindRequest()}.
 *
 * @package FileMaker
 */
class FileMaker_Command_FindRequest
{
    /**
     * Implementation
     *
     * @var FileMaker_Command_Find_Implementation
     * @access private
     */
    var $_impl;

    /**
     * Find request constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the 
     *        request was created by.
     * @param string $layout Layout to find records in.
     */
    function FileMaker_Command_FindRequest($fm, $layout)
    {
        $this->_impl = new FileMaker_Command_FindRequest_Implementation($fm, $layout);
    }

    /**
     * Sets whether this request is an omit request.
     * 
     * An omit request removes the matching records from the final result set.
     *
     * @param boolean $value TRUE if this is an omit request. Otherwise, FALSE.
     */
    function setOmit($value)
    {
        $this->_impl->setOmit($value);
    }

    /**
     * Adds a criterion to this find request.
     *
     * @param string $fieldname Name of the field being tested.
     * @param string $testvalue Value of the field to test against.
     */
    function addFindCriterion($fieldname, $testvalue)
    {
        $this->_impl->addFindCriterion($fieldname, $testvalue);
    }
    
    /**
     * Clears all existing criteria from this find request.
     */
    function clearFindCriteria()
    {
        $this->_impl->clearFindCriteria();
    }

	   
}
