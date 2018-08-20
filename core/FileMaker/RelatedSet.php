<?php
/**#@+
 * @ignore Include delegate.
 */
require_once dirname(__FILE__) . '/Implementation/RelatedSetImpl.php';
/**#@-*/

/**
 * Portal description class. Contains all the information about a
 * specific set of related records defined by a portal on a layout.
 *
 * @package FileMaker
 */
class FileMaker_RelatedSet
{
    /**
     * Implementation. This is the object that actually implements the
     * portal functionality.
     *
     * @var FileMaker_RelatedSet_Implementation
     * @access private
     */
    var $_impl;

    /**
     * Portal constructor.
     *
     * @param FileMaker_Layout &$layout FileMaker_Layout object that this 
     * portal is on.
     */
    function FileMaker_RelatedSet(&$layout)
    {
        $this->_impl = new FileMaker_RelatedSet_Implementation($layout);
    }

    /**
     * Returns the name of the related table from which this portal displays 
     * related records.
     *
     * @return string Name of related table for this portal.
     */
    function getName()
    {
        return $this->_impl->getName();
    }

    /**
     * Returns an array of the names of all fields in this portal.
     *
     * @return array List of field names as strings.
     */
    function listFields()
    {
        return $this->_impl->listFields();
    }

    /**
     * Returns a FileMaker_Field object that describes the specified field.
     *
     * @param string $fieldName Name of field.
     *
     * @return FileMaker_Field|FileMaker_Error Field object, if successful. 
     *         Otherwise, an Error object.
     */
    function &getField($fieldName)
    {
        return $this->_impl->getField($fieldName);
    }

    /**
     * Returns an associative array with the names of all fields as keys and 
     * FileMaker_Field objects as the array values.
     *
     * @return array Array of {@link FileMaker_Field} objects.
     */
    function &getFields()
    {
        return $this->_impl->getFields();
    }

    /**
     * Loads extended (FMPXMLLAYOUT) layout information.
     *
     * @access private
     *
     * @return boolean|FileMaker_Error TRUE, if successful. Otherwise, an Error 
     *         object.
     */
    function loadExtendedInfo()
    {
        return $this->_impl->loadExtendedInfo();
    }

}
