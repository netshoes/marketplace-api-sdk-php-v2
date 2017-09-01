<?php
/**
 * ProductResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Marketplace Grupo Netshoes
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ProductResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expands' => 'string[]',
        'sku' => 'string',
        'product_group' => 'string',
        'department' => 'string',
        'product_type' => 'string',
        'brand' => 'string',
        'name' => 'string',
        'description' => 'string',
        'color' => 'string',
        'flavor' => 'string',
        'gender' => 'string',
        'manufacturer_code' => 'string',
        'size' => 'string',
        'ean_isbn' => 'string',
        'height' => 'double',
        'width' => 'double',
        'depth' => 'double',
        'weight' => 'double',
        'video' => 'string',
        'images' => '\Swagger\Client\Model\InlineResponse200ItemsImages[]',
        'attributes' => '\Swagger\Client\Model\InlineResponse200ItemsAttributes[]',
        'links' => '\Swagger\Client\Model\InlineResponse200ItemsLinks[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'expands' => 'expands',
        'sku' => 'sku',
        'product_group' => 'productGroup',
        'department' => 'department',
        'product_type' => 'productType',
        'brand' => 'brand',
        'name' => 'name',
        'description' => 'description',
        'color' => 'color',
        'flavor' => 'flavor',
        'gender' => 'gender',
        'manufacturer_code' => 'manufacturerCode',
        'size' => 'size',
        'ean_isbn' => 'eanIsbn',
        'height' => 'height',
        'width' => 'width',
        'depth' => 'depth',
        'weight' => 'weight',
        'video' => 'video',
        'images' => 'images',
        'attributes' => 'attributes',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'expands' => 'setExpands',
        'sku' => 'setSku',
        'product_group' => 'setProductGroup',
        'department' => 'setDepartment',
        'product_type' => 'setProductType',
        'brand' => 'setBrand',
        'name' => 'setName',
        'description' => 'setDescription',
        'color' => 'setColor',
        'flavor' => 'setFlavor',
        'gender' => 'setGender',
        'manufacturer_code' => 'setManufacturerCode',
        'size' => 'setSize',
        'ean_isbn' => 'setEanIsbn',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'depth' => 'setDepth',
        'weight' => 'setWeight',
        'video' => 'setVideo',
        'images' => 'setImages',
        'attributes' => 'setAttributes',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'expands' => 'getExpands',
        'sku' => 'getSku',
        'product_group' => 'getProductGroup',
        'department' => 'getDepartment',
        'product_type' => 'getProductType',
        'brand' => 'getBrand',
        'name' => 'getName',
        'description' => 'getDescription',
        'color' => 'getColor',
        'flavor' => 'getFlavor',
        'gender' => 'getGender',
        'manufacturer_code' => 'getManufacturerCode',
        'size' => 'getSize',
        'ean_isbn' => 'getEanIsbn',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'depth' => 'getDepth',
        'weight' => 'getWeight',
        'video' => 'getVideo',
        'images' => 'getImages',
        'attributes' => 'getAttributes',
        'links' => 'getLinks'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['expands'] = isset($data['expands']) ? $data['expands'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['product_group'] = isset($data['product_group']) ? $data['product_group'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['manufacturer_code'] = isset($data['manufacturer_code']) ? $data['manufacturer_code'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['ean_isbn'] = isset($data['ean_isbn']) ? $data['ean_isbn'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets expands
     * @return string[]
     */
    public function getExpands()
    {
        return $this->container['expands'];
    }

    /**
     * Sets expands
     * @param string[] $expands
     * @return $this
     */
    public function setExpands($expands)
    {
        $this->container['expands'] = $expands;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets product_group
     * @return string
     */
    public function getProductGroup()
    {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group
     * @param string $product_group
     * @return $this
     */
    public function setProductGroup($product_group)
    {
        $this->container['product_group'] = $product_group;

        return $this;
    }

    /**
     * Gets department
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     * @param string $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets product_type
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     * @param string $product_type
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets brand
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     * @param string $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets flavor
     * @return string
     */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
     * Sets flavor
     * @param string $flavor
     * @return $this
     */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets manufacturer_code
     * @return string
     */
    public function getManufacturerCode()
    {
        return $this->container['manufacturer_code'];
    }

    /**
     * Sets manufacturer_code
     * @param string $manufacturer_code
     * @return $this
     */
    public function setManufacturerCode($manufacturer_code)
    {
        $this->container['manufacturer_code'] = $manufacturer_code;

        return $this;
    }

    /**
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets ean_isbn
     * @return string
     */
    public function getEanIsbn()
    {
        return $this->container['ean_isbn'];
    }

    /**
     * Sets ean_isbn
     * @param string $ean_isbn
     * @return $this
     */
    public function setEanIsbn($ean_isbn)
    {
        $this->container['ean_isbn'] = $ean_isbn;

        return $this;
    }

    /**
     * Gets height
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param double $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param double $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets depth
     * @return double
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     * @param double $depth
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets weight
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param double $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets video
     * @return string
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     * @param string $video
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets images
     * @return \Swagger\Client\Model\InlineResponse200ItemsImages[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \Swagger\Client\Model\InlineResponse200ItemsImages[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets attributes
     * @return \Swagger\Client\Model\InlineResponse200ItemsAttributes[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \Swagger\Client\Model\InlineResponse200ItemsAttributes[] $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\InlineResponse200ItemsLinks[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\InlineResponse200ItemsLinks[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


