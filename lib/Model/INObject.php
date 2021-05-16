<?php
/**
 * INObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Irisnet API
 *
 * Artificial Intelligence (AI) for image- and video-processing in realtime. This is an interactive documentation meant to give a place were you can quickly look up the endpoints and their schemas, while also giving you the option to try things out yourself.  Listed below you'll see the available endpoints of the API that can be expanded by clicking on it. Each expanded endpoint lists the request parameter (if available) and the request body (if available). The request body can list some example bodies and the schema, explaining each model in detail. Additionally you'll find a 'Try it out' button where you can type in your custom parameters and custom body and execute that against the API. The responses section in the expanded endpoint lists the possible responses with their corresponding status codes. If you've executed an API call it will also show you the response from the server.  Underneath the endpoints you'll find the model schemas. These are the models used for the requests and responses.By clicking on the right arrow you can expand the model and it will show you a description of the model and the model parameters. For nested models you can keep clicking the right arrow to reveal further details on it.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Irisnet\API\Client\Model;

use \ArrayAccess;
use \Irisnet\API\Client\ObjectSerializer;

/**
 * INObject Class Doc Comment
 *
 * @category Class
 * @description Describes a rectangle that stretches around the recognized object. This is useful when redacting or blurring certain recognized objects. Each object contains the name of the classification and coordinates for a rectangle around the recognized object. The origin point (y &#x3D; 0.0, x &#x3D; 0.0) of the coordinate system is on the top left of the of the source material. The bottom right of the source is always y &#x3D; 1 and x &#x3D; 1.
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class INObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'INObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inClass' => 'string',
        'inGroup' => 'string',
        'inId' => 'string',
        'x0' => 'float',
        'y0' => 'float',
        'width' => 'float',
        'height' => 'float',
        'probability' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'inClass' => null,
        'inGroup' => null,
        'inId' => null,
        'x0' => 'float',
        'y0' => 'float',
        'width' => 'float',
        'height' => 'float',
        'probability' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'inClass' => 'inClass',
        'inGroup' => 'inGroup',
        'inId' => 'inId',
        'x0' => 'x0',
        'y0' => 'y0',
        'width' => 'width',
        'height' => 'height',
        'probability' => 'probability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inClass' => 'setInClass',
        'inGroup' => 'setInGroup',
        'inId' => 'setInId',
        'x0' => 'setX0',
        'y0' => 'setY0',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'probability' => 'setProbability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inClass' => 'getInClass',
        'inGroup' => 'getInGroup',
        'inId' => 'getInId',
        'x0' => 'getX0',
        'y0' => 'getY0',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'probability' => 'getProbability'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['inClass'] = isset($data['inClass']) ? $data['inClass'] : null;
        $this->container['inGroup'] = isset($data['inGroup']) ? $data['inGroup'] : null;
        $this->container['inId'] = isset($data['inId']) ? $data['inId'] : null;
        $this->container['x0'] = isset($data['x0']) ? $data['x0'] : null;
        $this->container['y0'] = isset($data['y0']) ? $data['y0'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets inClass
     *
     * @return string|null
     */
    public function getInClass()
    {
        return $this->container['inClass'];
    }

    /**
     * Sets inClass
     *
     * @param string|null $inClass The classification of the recognized object.
     *
     * @return $this
     */
    public function setInClass($inClass)
    {
        $this->container['inClass'] = $inClass;

        return $this;
    }

    /**
     * Gets inGroup
     *
     * @return string|null
     */
    public function getInGroup()
    {
        return $this->container['inGroup'];
    }

    /**
     * Sets inGroup
     *
     * @param string|null $inGroup The group of the classification.
     *
     * @return $this
     */
    public function setInGroup($inGroup)
    {
        $this->container['inGroup'] = $inGroup;

        return $this;
    }

    /**
     * Gets inId
     *
     * @return string|null
     */
    public function getInId()
    {
        return $this->container['inId'];
    }

    /**
     * Sets inId
     *
     * @param string|null $inId The group of the classification.
     *
     * @return $this
     */
    public function setInId($inId)
    {
        $this->container['inId'] = $inId;

        return $this;
    }

    /**
     * Gets x0
     *
     * @return float|null
     */
    public function getX0()
    {
        return $this->container['x0'];
    }

    /**
     * Sets x0
     *
     * @param float|null $x0 The starting point of the rectangle in the vertical (x) direction.
     *
     * @return $this
     */
    public function setX0($x0)
    {
        $this->container['x0'] = $x0;

        return $this;
    }

    /**
     * Gets y0
     *
     * @return float|null
     */
    public function getY0()
    {
        return $this->container['y0'];
    }

    /**
     * Sets y0
     *
     * @param float|null $y0 The starting point of the rectangle in the horizontal (y) direction.
     *
     * @return $this
     */
    public function setY0($y0)
    {
        $this->container['y0'] = $y0;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width The distance from the starting point (y0) to end the rectangle in the horizontal direction.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height The distance from the starting point (x0) to end the rectangle in the vertical direction.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return int|null
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param int|null $probability The probability that the object found matches the classification.
     *
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


