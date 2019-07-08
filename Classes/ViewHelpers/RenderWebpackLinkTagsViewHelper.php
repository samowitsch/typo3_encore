<?php
declare(strict_types = 1);

namespace Ssch\Typo3Encore\ViewHelpers;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Ssch\Typo3Encore\Asset\TagRenderer;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

final class RenderWebpackLinkTagsViewHelper extends AbstractViewHelper
{

    /**
     * @var TagRenderer
     */
    private $tagRenderer;

    public function __construct(TagRenderer $tagRenderer)
    {
        $this->tagRenderer = $tagRenderer;
    }

    public function initializeArguments()
    {
        $this->registerArgument('entryName', 'string', 'The entry name', true);
        $this->registerArgument('media', 'string', 'Media type', false, 'all');
    }

    public function render()
    {
        $this->tagRenderer->renderWebpackLinkTags($this->arguments['entryName']);
    }
}
