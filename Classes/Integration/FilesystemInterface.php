<?php


namespace Ssch\Typo3Encore\Integration;

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

interface FilesystemInterface
{
    public function get(string $pathToFile): string;

    public function exists(string $pathToFile): bool;

    public function getFileAbsFileName(string $pathToFile): string;

    public function getRelativeFilePath(string $pathToFile): string;
}
