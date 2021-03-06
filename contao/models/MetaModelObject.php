<?php
/**
 *
 * PHP version 5
 * @copyright  Ondrej Brinkel 2014
 * @author     Ondrej Brinkel
 * @package    MetaModelsOpenImmo
 * @license    MIT
 * @filesource
 */

namespace MetaModelsOpenImmo\Models;

class MetaModelObject {

    public $id;
    public $metamodel;
    public $exportPath;
    public $filesPath;
    public $tableName;
    public $oiVersion;
    public $uniqueIDField;
    public $uniqueIDMetamodelAttribute;
    public $deleteFilesOlderThen;
    public $autoSync;
    public $lastSync;
    public $sortFilesBy;
    public $language;

    public static function fromArray(array $data = array())
    {
        return new self($data);
    }

    public function __construct(array $data = array())
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->metamodel = isset($data['metamodel']) ? $data['metamodel'] : null;
        $this->exportPath = isset($data['exportPath']) ? $data['exportPath'] : null;
        $this->filesPath = isset($data['filesPath']) ? $data['filesPath'] : null;
        $this->tableName = isset($data['tableName']) ? $data['tableName'] : null;
        $this->oiVersion = isset($data['oiVersion']) ? $data['oiVersion'] : null;
        $this->uniqueIDField = isset($data['uniqueIDField']) ? $data['uniqueIDField'] : null;
        $this->uniqueIDMetamodelAttribute = isset($data['uniqueIDMetamodelAttribute']) ? $data['uniqueIDMetamodelAttribute'] : null;
        $this->deleteFilesOlderThen = isset($data['deleteFilesOlderThen']) ? intval($data['deleteFilesOlderThen']) : 0;
        $this->autoSync = isset($data['autoSync']) ? $data['autoSync'] : 'never';
        $this->lastSync = isset($data['lastSync']) ? intval($data['lastSync']) : 0;
        $this->sortFilesBy = isset($data['sortFilesBy']) ? $data['sortFilesBy'] : null;
        $this->language = isset($data['language']) ? $data['language'] : 'de';
    }

    public function toArray()
    {
        return array(
            'id' => $this->id,
            'metamodel' => $this->metamodel,
            'exportPath' => $this->exportPath,
            'filesPath' => $this->filesPath,
            'tableName' => $this->tableName,
            'oiVersion' => $this->oiVersion,
            'uniqueIDField' => $this->uniqueIDField,
            'uniqueIDMetamodelAttribute' => $this->uniqueIDMetamodelAttribute,
            'deleteFilesOlderThen' => $this->deleteFilesOlderThen,
            'autoSync' => $this->autoSync,
            'lastSync' => $this->lastSync,
            'sortFilesBy' => $this->sortFilesBy,
            'language' => $this->language,
        );
    }
}
