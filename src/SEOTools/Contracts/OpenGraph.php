<?php namespace Artesaos\SEOTools\Contracts;

interface OpenGraph
{
    /**
     * @param array $config
     */
    public function __construct(array $config = array());

    /**
     * Generates open graph tags.
     *
     * @return string
     */
    public function generate();

    /**
     * Add or update property.
     *
     * @param string $key
     * @param string $value
     *
     * @return OpenGraph
     */
    public function addProperty($key, $value);

    /**
     * Add image to properties.
     *
     * @param string $url
     *
     * @return OpenGraph
     */
    public function addImage($url);

    /**
     * Add images to properties.
     *
     * @param string $urls
     *
     * @return OpenGraph
     */
    public function addImages(array $urls);

    /**
     * Define title property.
     *
     * @param $title
     *
     * @return OpenGraph
     */
    public function setTitle($title);

    /**
     * Define description property.
     *
     * @param string $description
     *
     * @return OpenGraph
     */
    public function setDescription($description);

    /**
     * Define url property.
     *
     * @param string $url
     *
     * @return OpenGraph
     */
    public function setUrl($url);

    /**
     * Define site_name property
     *
     * @param string $name
     *
     * @return OpenGraph
     */
    public function setSiteName($name);
}
