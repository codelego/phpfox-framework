<?php

namespace Phpfox\Framework\Model;

/**
 * Interface ModelInterface
 *
 * @package Phpfox\Framework\Model
 */
interface ModelInterface
{
    /**
     * @return array
     */
    public function toArray();

    /**
     * Update data from array
     *
     * @param $array
     *
     * @return $this
     */
    public function exchangeArray($array);

    /**
     * @return bool
     * @throws GatewayException
     */
    public function delete();

    /**
     * @return $this
     * @throws GatewayException
     */
    public function save();

    /**
     * @return bool
     */
    public function isSaved();
}