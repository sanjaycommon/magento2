<?php
/**
 * Interface of REST response renderers.
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Webapi\Rest\Response;

interface RendererInterface
{
    /**
     * Render content in a certain format.
     *
     * @param object|array|int|string|bool|float|null $data
     * @return string
     */
    public function render($data);

    /**
     * Get MIME type generated by renderer.
     *
     * @return string
     */
    public function getMimeType();
}
