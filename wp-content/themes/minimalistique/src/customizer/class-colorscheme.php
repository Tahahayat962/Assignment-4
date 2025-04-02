<?php

namespace SuperbThemesCustomizer;

use SuperbThemesCustomizer\Utils\CustomizerColor;

use SuperbThemesCustomizer\CustomizerControls;

class CustomizerColorScheme
{
    private $Colors = array();

    public function __construct()
    {
        $this->AddColor(new CustomizerColor(
            '--minimalistique-foreground',
            __('Foreground', 'minimalistique'),
            __('Sets the foreground colors for the theme.', 'minimalistique'),
            '#000000'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-button-text-color',
            __('Button Text', 'minimalistique'),
            __('Sets the button text colors for the theme.', 'minimalistique'),
            '#ffffff'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-background',
            __('Base Background', 'minimalistique'),
            __('Sets the base background colors for the theme.', 'minimalistique'),
            '#ffffff'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-background-elements',
            __('Boxed Background Color', 'minimalistique'),
            __('Sets the background color for boxed mode elements when the boxed mode general layout setting is enabled.', 'minimalistique'),
            '#fafafa',
            false,
            array(
                CustomizerControls::GENERAL_LAYOUT_MODE => array(
                    CustomizerControls::GENERAL_BOXMODE
                )
            )
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-border-mode-elements',
            __('Border Mode Color', 'minimalistique'),
            __('Sets the colors for the border mode elements when the border mode general layout setting is enabled.', 'minimalistique'),
            '#000000',
            false,
            array(
                CustomizerControls::GENERAL_LAYOUT_MODE => array(
                    CustomizerControls::GENERAL_BORDERMODE
                )
            )
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-primary',
            __('Primary', 'minimalistique'),
            __('Sets the primary colors for the theme.', 'minimalistique'),
            '#000000',
            '#1d1d1d'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-secondary',
            __('Secondary', 'minimalistique'),
            __('Sets the secondary colors for the theme.', 'minimalistique'),
            '#6324e4',
            '#5c21d6'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-light-2',
            __('Light Color', 'minimalistique'),
            __('Sets the light colors for the theme.', 'minimalistique'),
            '#efefef'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-dark-1',
            __('Dark Color', 'minimalistique'),
            __('Sets the dark colors for the theme.', 'minimalistique'),
            '#717171'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-input-background-color',
            __('Input Field Background', 'minimalistique'),
            __('Sets the background colors for input fields for the theme.', 'minimalistique'),
            '#ffffff'
        ));
        //
        $this->AddColor(new CustomizerColor(
            '--minimalistique-select-color',
            __('Select Color', 'minimalistique'),
            __('Sets the background colors for select element for the theme.', 'minimalistique'),
            '#efefef'
        ));
        //
    }

    /* ****************************** */

    public function GetColors()
    {
        return $this->Colors;
    }

    private function AddColor($color)
    {
        $this->Colors[$color->GetId()] = $color;
        if (false !== $color->GetDarkId()) {
            $this->Colors[$color->GetDarkId()] = new CustomizerColor(
                $color->GetDarkId(),
                'Dark Variant',
                'Sets the dark variant for the color.',
                $color->GetDarkDefault(),
                false,
                $color->GetConditions()
            );
        }
    }

    public function MaybeGetDefault($control_id)
    {
        if (isset($this->Colors[$control_id])) {
            return $this->Colors[$control_id]->GetDefault();
        }
        return false;
    }

    public function GetColorIdsNoVariants()
    {
        return array_map(function ($item) {
            return $item->GetId();
        }, array_values(array_filter($this->Colors, function ($item) {
            return false === $item->GetDarkId();
        })));
    }

    public function GetColorIdsVariantsOnly()
    {
        return array_map(function ($item) {
            if (false !== $item->GetDarkId())
                return array('REGULAR' => $item->GetId(), 'DARK' => $item->GetDarkId());
        }, array_values(array_filter($this->Colors, function ($item) {
            return false !== $item->GetDarkId();
        })));
    }
}
