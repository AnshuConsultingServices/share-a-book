<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emthemes\MegaMenu\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var \Magento\CatalogSampleData\Model\Category
     */
    private $item;

    /**
     * @param \Magento\CatalogSampleData\Model\Category $category
     * @param \Magento\ThemeSampleData\Model\Css $css
     * @param \Emthemes\ThemeSettings\Model\Setup\Page $page
     * @param \Emthemes\ThemeSettings\Model\Setup\Block $block
     */
    public function __construct(
        \Emthemes\MegaMenu\Setup\Model\Menu $item
    ) {
        $this->item = $item;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->item->install(['Emthemes_MegaMenu::fixtures/items.csv']);
    }
}
