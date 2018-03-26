<?php

namespace Application\Theme\Camelcasethemefoldername; //Example: if theme folder name is 'theme-folder', you would put ThemeFolder

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;

class PageTheme extends \Concrete\Core\Page\Theme\Theme implements ThemeProviderInterface
{

    public function registerAssets()
    {
        $this->providesAsset('css', 'bootstrap/*');    
        $this->requireAsset('javascript', 'jquery');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';
    public function getThemeAreaLayoutPresets()
    {
        $presets = array(
        );
        return $presets;
    }
}
    