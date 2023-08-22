<?php

declare(strict_types=1);

namespace UniversityOfCopenhagen\UcphCeBase\Hooks;

/*
 * This file is part of TYPO3 CMS-based extension "container" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use TYPO3\CMS\Backend\View\BackendLayout\Grid\GridColumnItem;

class DrawItem extends \TYPO3\CMS\Backend\Preview\StandardContentPreviewRenderer 
{

    public function wrapPageModulePreview(string $previewHeader, string $previewContent, GridColumnItem $item): string
    {
        return '<div class="nanna-was-here"><h2>' . $previewHeader . '</h2>' . $previewContent . '</div>';
    }

}