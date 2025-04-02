<?php

namespace SuperbThemesCustomizer;

use SuperbThemesCustomizer\Utils\CustomizerItem;
use SuperbThemesCustomizer\Utils\CustomizerType;
use SuperbThemesCustomizer\CustomizerPanels;
use SuperbThemesCustomizer\CustomizerSections;

class CustomizerControls
{
    const GENERAL_LAYOUT_MODE = 'general_layout_mode';
    const GENERAL_DEFAULTMODE = 'general_layout_defaultmode';
    const GENERAL_BOXMODE = 'general_layout_boxmode';
    const GENERAL_BOXMODE_HIDE_MOBILE = 'general_layout_boxmode_hide_mobile';
    const GENERAL_BORDERMODE = 'general_layout_bordermode';
    const GENERAL_BORDERMODE_HIDE_MOBILE = 'general_layout_bordermode_hide_mobile';
    const GENERAL_BORDER_RADIUS_ELEMENTS = '--minimalistique-element-border-radius';
    const GENERAL_BORDER_RADIUS_BUTTONS = '--minimalistique-button-border-radius';
    //
    const UPPERWIDGETS_FRONTPAGE_ONLY = 'upperwidgets_frontpage_only';

    const HEADER_METASLIDER_SHORTCODE = 'header_metaslider_overwrite';
    const HEADER_METASLIDER_ONLY_FRONTPAGE = 'only_show_header_frontpage_metaslider';

    const HEADER_ONLY_FRONTPAGE = 'only_show_header_frontpage';
    const HEADER_TITLE = 'header_img_text';
    const HEADER_TAGLINE = 'header_img_text_tagline';
    const HEADER_TAGLINE_HIDE_MOBILE = 'hide_tagline_mobile';
    const HEADER_BUTTON_TEXT = 'header_img_button_text';
    const HEADER_BUTTON_LINK = 'header_img_button_link';
    const HEADER_BUTTON_HIDE_MOBILE = 'hide_button_mobile';

    const SITE_IDENTITY_LOGO_HEIGHT = '--minimalistique-logo-height';
    const SITE_IDENTITY_HIDE_TAGLINE = 'navigation_hide_tagline';

    const NAVIGATION_HIDE_CART = 'navigation_hide_cart';
    const NAVIGATION_LAYOUT_STYLE = 'navigation_layout_style';
    const NAVIGATION_LAYOUT_CHOICE_SMALL = 'navigation_layout_style_choice_small';
    const NAVIGATION_LAYOUT_CHOICE_LARGE = 'navigation_layout_style_choice_large';
    const NAVIGATION_LAYOUT_CHOICE_BUSINESS = 'navigation_layout_style_choice_business';
    const NAVIGATION_AUTHOR_IMAGE = 'navigation_large_author_image';
    const NAVIGATION_AUTHOR_NAME = 'navigation_large_author_name';
    const NAVIGATION_AUTHOR_TAGLINE = 'navigation_large_author_tagline';
    const NAVIGATION_RIGHTALIGNED_BUTTON_TEXT = 'navigation_large_rightalignedbutton_text';
    const NAVIGATION_RIGHTALIGNED_BUTTON_LINK = 'navigation_large_rightalignedbutton_link';
    const NAVIGATION_RIGHTALIGNED_BUTTON_TARGETBLANK = 'navigation_large_rightalignedbutton_link_targetblank';
    const NAVIGATION_SEARCHBAR_ENABLED = 'navigation_searchbar_enabled';

    const SIDEBAR_WOOCOMMERCE_HIDE = 'hide_wc_sidebar';

    const FOOTER_GOTOTOP_HIDE = 'footer_go_to_top_hide';

    const COPYRIGHT_TEXT = 'footer_copyright_text';

    const BLOGFEED_SHOW_FULL_POSTS = 'show_except_or_full';
    ////
    const BLOGFEED_COLUMNS_STYLE = 'blogfeed_columns_style';
    //
    const BLOGFEED_ONE_COLUMNS = 'blogfeed_onecolumn';
    const BLOGFEED_TWO_COLUMNS = 'blogfeed_twocolumn';
    const BLOGFEED_THREE_COLUMNS = 'blogfeed_three_columns';
    const BLOGFEED_TWO_COLUMNS_MASONRY = 'blogfeed_twocolumn_masonry';
    const BLOGFEED_THREE_COLUMNS_MASONRY = 'blogfeed_three_colums_masonry';
    const BLOGFEED_ONE_COLUMN_ALTERNATIVE = 'blogfeed_onecolumn_alternative';
    /////
    const BLOGFEED_HIDE_SIDEBAR = 'blogfeed_show_sidebar';
    const BLOGFEED_HIDE_BYLINE_IMAGE = 'blogfeed_hide_authorimage';
    const BLOGFEED_HIDE_BYLINE_AUTHOR = 'blogfeed_hide_abouttheauthor';
    const BLOGFEED_SHOW_READMORE_BUTTON = 'blogfeed_show_readmore_button';
    const BLOGFEED_HIDE_CATEGORY_FEATURED_IMAGE = 'blogfeed_hide_category_featuredimage';
    ////
    const BLOGFEED_FEATURED_IMAGE_STYLE = 'blogfeed_featured_image_style';
    //
    const BLOGFEED_FEATURED_IMAGE_CHOICE_FULL_IMAGE = 'blogfeed_featured_image_style_fullimage';
    const BLOGFEED_FEATURED_IMAGE_CHOICE_COVER_IMAGE = 'blogfeed_featured_image_style_cover';
    const BLOGFEED_FEATURED_IMAGE_CHOICE_FULL_IMAGE_COVER_BLUR = 'blogfeed_featured_image_style_coverblur';
    ////
    const BLOGFEED_FEATURED_IMAGE_PLACEHOLDER = 'blogfeed_featured_image_placeholder';
    //

    ////
    const SINGLE_FEATURED_IMAGE_STYLE = 'SINGLE_featured_image_style';
    //
    const SINGLE_FEATURED_IMAGE_CHOICE_FULL_IMAGE = 'SINGLE_featured_image_style_fullimage';
    const SINGLE_FEATURED_IMAGE_CHOICE_COVER_IMAGE = 'SINGLE_featured_image_style_cover';
    const SINGLE_FEATURED_IMAGE_CHOICE_FULL_IMAGE_COVER_BLUR = 'SINGLE_featured_image_style_coverblur';
    ////
    const SINGLE_HIDE_BYLINE_IMAGE = 'single_hide_bylineauthorimage';
    const SINGLE_HIDE_BYLINE_AUTHOR = 'single_hide_bylineauthor';
    const SINGLE_DISPLAY_ABOUT_AUTHOR = 'postpage_show_author';
    const SINGLE_HIDE_RELATED_POSTS = 'postpage_show_hide_relatedposts';
    const SINGLE_HIDE_NEXT_PREV = 'postpage_hide_nextprev';
    const SINGLE_HIDE_CATEGORIES_TAGS = 'show_posts_categories_tags';
    const SINGLE_HIDE_SIDEBAR = 'postpage_hide_sidebar';

    //
    const PAGE_404_HIDE_POSTS = 'page_404_hide_recent_posts';


    const RANGE_VARIABLE_CONTROLS = array(
        self::SITE_IDENTITY_LOGO_HEIGHT,
        self::GENERAL_BORDER_RADIUS_ELEMENTS,
        self::GENERAL_BORDER_RADIUS_BUTTONS
    );

    private static $CONTROL_DEFAULTS = array(
        self::SITE_IDENTITY_LOGO_HEIGHT => 65,
        self::BLOGFEED_COLUMNS_STYLE => self::BLOGFEED_ONE_COLUMN_ALTERNATIVE,
        self::BLOGFEED_FEATURED_IMAGE_STYLE => self::BLOGFEED_FEATURED_IMAGE_CHOICE_FULL_IMAGE,
        self::SINGLE_FEATURED_IMAGE_STYLE => self::SINGLE_FEATURED_IMAGE_CHOICE_FULL_IMAGE,
        self::NAVIGATION_LAYOUT_STYLE => self::NAVIGATION_LAYOUT_CHOICE_LARGE,
        self::BLOGFEED_HIDE_SIDEBAR => "",
        self::SINGLE_HIDE_SIDEBAR => "",
        self::SINGLE_HIDE_RELATED_POSTS => "",
        self::NAVIGATION_RIGHTALIGNED_BUTTON_TARGETBLANK => "1",
        self::NAVIGATION_SEARCHBAR_ENABLED => "",
        self::GENERAL_LAYOUT_MODE => self::GENERAL_BORDERMODE,
        self::GENERAL_BOXMODE_HIDE_MOBILE => "1",
        self::GENERAL_BORDERMODE_HIDE_MOBILE => "",
        self::GENERAL_BORDER_RADIUS_ELEMENTS => 0,
        self::GENERAL_BORDER_RADIUS_BUTTONS => 0,
        self::SITE_IDENTITY_HIDE_TAGLINE => "",
        self::BLOGFEED_SHOW_READMORE_BUTTON => "",
        self::FOOTER_GOTOTOP_HIDE => "1",
        self::SINGLE_HIDE_BYLINE_IMAGE => "1",
        self::BLOGFEED_HIDE_BYLINE_IMAGE => "1",
        self::PAGE_404_HIDE_POSTS => "1"
    );

    const SPBLT = '_spblt';

    public function __construct($colorScheme)
    {
        /*
        *
        * COLOR SCHEME
        *
        */
        $dark_variants = array();
        foreach ($colorScheme->GetColors() as $customizerColor) {
            $dark_variants[] = $customizerColor->GetDarkId();
            $this->CreateColorCustomizerItem($customizerColor, in_array($customizerColor->GetId(), $dark_variants, true));
        }

        /*
        */

        /*
        *
        * GENERAL
        *
        */
        new CustomizerItem(self::GENERAL_LAYOUT_MODE, array(
            "type" => CustomizerType::CONTROL_RADIO,
            "label" => __('Layout Mode', 'minimalistique'),
            "description" => __('Select the layout mode of the theme.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::GENERAL,
            "default" => self::$CONTROL_DEFAULTS[self::GENERAL_LAYOUT_MODE],
            "choices" => array(
                self::GENERAL_DEFAULTMODE => "Simple Layout",
                self::GENERAL_BOXMODE => "Boxed Layout",
                self::GENERAL_BORDERMODE => "Border Layout"
            )
        ));

        new CustomizerItem(self::GENERAL_BOXMODE_HIDE_MOBILE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Disable Boxed Layout on Mobile', 'minimalistique'),
            "description" => __('When this setting is enabled, and Boxed Layout is enabled, the boxed layout will not be applied on mobile devices and other low-width screens.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::GENERAL,
            "default" => self::$CONTROL_DEFAULTS[self::GENERAL_BOXMODE_HIDE_MOBILE],
            "conditions" => array(
                self::GENERAL_LAYOUT_MODE => array(
                    self::GENERAL_BOXMODE
                )
            )
        ));

        new CustomizerItem(self::GENERAL_BORDERMODE_HIDE_MOBILE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Disable Border Layout on Mobile', 'minimalistique'),
            "description" => __('When this setting is enabled, and Border Layout is enabled, the border layout will not be applied on mobile devices and other low-width screens.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::GENERAL,
            "default" => self::$CONTROL_DEFAULTS[self::GENERAL_BORDERMODE_HIDE_MOBILE],
            "conditions" => array(
                self::GENERAL_LAYOUT_MODE => array(
                    self::GENERAL_BORDERMODE
                )
            )
        ));



        new CustomizerItem(self::GENERAL_BORDER_RADIUS_ELEMENTS, array(
            "type" => CustomizerType::CONTROL_RANGE,
            "label" => __('Border Radius - Elements', 'minimalistique'),
            "description" => __('Sets the border radius for elements in the theme', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::GENERAL,
            "default" => self::$CONTROL_DEFAULTS[self::GENERAL_BORDER_RADIUS_ELEMENTS],
            "range" => array(
                'min' => 0,
                'max' => 50,
                'step' => 1
            )
        ));

        new CustomizerItem(self::GENERAL_BORDER_RADIUS_BUTTONS, array(
            "type" => CustomizerType::CONTROL_RANGE,
            "label" => __('Border Radius - Buttons', 'minimalistique'),
            "description" => __('Sets the border radius for buttons in the theme', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::GENERAL,
            "default" => self::$CONTROL_DEFAULTS[self::GENERAL_BORDER_RADIUS_BUTTONS],
            "range" => array(
                'min' => 0,
                'max' => 50,
                'step' => 1
            )
        ));

        /*
        *
        * UPPER WIDGETS
        *
        */
        new CustomizerItem(self::UPPERWIDGETS_FRONTPAGE_ONLY, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Only Display Header Widgets on Front Page', 'minimalistique'),
            "description" => __('When this setting is enabled, header widgets will only be shown on the front page.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::WIDGETS,
            "default" => 0
        ));


        /*
        *
        * HEADER METASLIDER
        *
        */
        new CustomizerItem(self::HEADER_METASLIDER_SHORTCODE, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('MetaSlider Shortcode', 'minimalistique'),
            "description" => __('Add your MetaSlider slider shortcode in this field to use the Slider as your header. This will be used instead of the default theme header.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_METASLIDER,
            "priority" => 1,
        ));
        new CustomizerItem(self::HEADER_METASLIDER_ONLY_FRONTPAGE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Show header on all pages', 'minimalistique'),
            "description" => __('Enabling this option will display the MetaSlider header on all pages.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_METASLIDER,
            "default" => 0,
        ));

        /*
        *
        * HEADER DEFAULT
        *
        */
        /* Header */
        new CustomizerItem(self::HEADER_ONLY_FRONTPAGE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Show header on all pages', 'minimalistique'),
            "description" => __('Enabling this option will display the header on all pages.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_DEFAULT,
            "default" => 0,
        ));
        new CustomizerItem(self::HEADER_TITLE, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Title', 'minimalistique'),
            "description" => __('The title text displayed in your header.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_DEFAULT,
        ));
        new CustomizerItem(self::HEADER_TAGLINE, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Tagline', 'minimalistique'),
            "description" => __('The tagline text displayed in your header.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_DEFAULT,
        ));
        new CustomizerItem(self::HEADER_BUTTON_TEXT, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Button Text', 'minimalistique'),
            "description" => __('The button text displayed in your header.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_DEFAULT,
        ));
        new CustomizerItem(self::HEADER_BUTTON_LINK, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Button Link', 'minimalistique'),
            "description" => __('The link used by the button in your header.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_DEFAULT,
        ));
        new CustomizerItem(self::HEADER_BUTTON_HIDE_MOBILE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Header Button on Mobile', 'minimalistique'),
            "description" => __('Enabling this setting will hide the header button on mobile- and other small screen devices.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_DEFAULT,
            "default" => 0
        ));
        new CustomizerItem(self::HEADER_TAGLINE_HIDE_MOBILE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Header Tagline on Mobile', 'minimalistique'),
            "description" => __('Enabling this setting will hide the header tagline on mobile- and other small screen devices.', 'minimalistique'),
            "section" => CustomizerPanels::HEADER . CustomizerSections::HEADER_DEFAULT,
            "default" => 0
        ));

        /*
        *
        * SITE IDENTITY
        *
        */
        new CustomizerItem(self::SITE_IDENTITY_LOGO_HEIGHT, array(
            "type" => CustomizerType::CONTROL_RANGE,
            "label" => __('Logo Height', 'minimalistique'),
            "description" => __('Sets the height limit for the logo image, if once is selected.', 'minimalistique'),
            "section" => 'title_tagline',
            "priority" => 1,
            "default" => self::$CONTROL_DEFAULTS[self::SITE_IDENTITY_LOGO_HEIGHT],
            "range" => array(
                'min' => 25,
                'max' => 200,
                'step' => 1
            )
        ));

        new CustomizerItem(self::SITE_IDENTITY_HIDE_TAGLINE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Tagline Only', 'minimalistique'),
            "section" => 'title_tagline',
            "default" => self::$CONTROL_DEFAULTS[self::SITE_IDENTITY_HIDE_TAGLINE]
        ));

        /*
        *
        * NAVIGATION
        *
        */
        /* Layout */
        new CustomizerItem(self::NAVIGATION_HIDE_CART, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Shopping Cart', 'minimalistique'),
            "description" => __('When WooCommerce is active, enabling this setting will hide the shopping cart in the navigation.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "default" => 0,
            "priority" => 0
        ));

        new CustomizerItem(self::NAVIGATION_LAYOUT_STYLE, array(
            "type" => CustomizerType::CONTROL_RADIO_IMAGE,
            "label" => __('Navigation Layout', 'minimalistique'),
            "description" => __('Select the layout of the navigation area on your website.', 'minimalistique'),
            "priority" => 1,
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "default" => self::$CONTROL_DEFAULTS[self::NAVIGATION_LAYOUT_STYLE],
            "choices" => array(
                self::NAVIGATION_LAYOUT_CHOICE_SMALL =>  '<svg xmlns="http://www.w3.org/2000/svg" width="119.958" height="37.94" viewBox="0 0 119.958 37.94"><title>' . esc_html__("Small Navigation Layout", "minimalistique") . '</title><g transform="translate(-49.021 -37.125)"><rect width="30.966" height="8.753" transform="translate(57.387 44.969)" /><rect width="9.966" height="3.753" transform="translate(151 47.469)" /><rect width="9.966" height="3.753" transform="translate(137 47.469)" /><rect width="9.966" height="3.753" transform="translate(123 47.469)" /><rect width="9.966" height="3.753" transform="translate(109 47.469)" /><path d="M373.5,57.034H254.566v37.94H374.524V57.034ZM256.559,92.981V59.027H372.532V92.981Z" transform="translate(-205.545 -19.909)"></path></g></svg>',
                self::NAVIGATION_LAYOUT_CHOICE_LARGE =>  '<svg xmlns="http://www.w3.org/2000/svg" width="119.958" height="37.94" viewBox="0 0 119.958 37.94"><title>' . esc_html__("Full Navigation Layout", "minimalistique") . '</title><g transform="translate(-49.021 -82.628)"><rect width="32.966" height="10.753" transform="translate(93.051 90.845)" /><rect width="13.094" height="5.722" rx="2.861" transform="translate(147.871 93.361)" /><g transform="translate(1.483)"><rect width="9.966" height="3.753" transform="translate(123.534 108.469)" /><rect width="9.966" height="3.753" transform="translate(137.534 108.469)" /><rect width="9.966" height="3.753" transform="translate(67.534 108.469)" /><rect width="9.966" height="3.753" transform="translate(109.534 108.469)" /><rect width="9.966" height="3.753" transform="translate(95.534 108.469)" /><rect width="9.966" height="3.753" transform="translate(81.534 108.469)" /></g><path d="M373.5,57.034H254.566v37.94H374.524V57.034ZM256.559,92.981V59.027H372.532V92.981Z" transform="translate(-205.545 25.594)" /><g transform="translate(-0.484)"><rect width="9.966" height="2.753" transform="translate(68.387 93.095)" /><rect width="9.966" height="1.753" transform="translate(68.387 97.595)" /><circle cx="4.516" cy="4.516" r="4.516" transform="translate(57.871 91.706)" /></g></g></svg>',
                self::NAVIGATION_LAYOUT_CHOICE_BUSINESS =>  '<svg xmlns="http://www.w3.org/2000/svg" width="119.958" height="37.94" viewBox="0 0 119.958 37.94"><title>' . esc_html__("Business Navigation Layout", "minimalistique") . '</title><g transform="translate(-49.021 -37.125)"><rect width="19.966" height="8.753" transform="translate(57.387 44.969)"></rect><rect width="19.966" height="8.753" transform="translate(141 44.969)"></rect><rect width="9.966" height="3.753" transform="translate(120 47.469)"></rect><rect width="9.966" height="3.753" transform="translate(105 47.469)"></rect><rect width="9.966" height="3.753" transform="translate(89 47.469)"></rect><path d="M373.5,57.034H254.566v37.94H374.524V57.034ZM256.559,92.981V59.027H372.532V92.981Z" transform="translate(-205.545 -19.909)"></path></g></svg>',
            )
        ));

        new CustomizerItem(self::NAVIGATION_AUTHOR_IMAGE, array(
            "type" => CustomizerType::CONTROL_IMAGE,
            "label" => __('Author Image', 'minimalistique'),
            "description" => __('If the Full Navigation Layout is active, sets the author image in the top left side of the navigation layout.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "default" => "",
            "priority" => 1,
            "conditions" => array(
                self::NAVIGATION_LAYOUT_STYLE => array(
                    self::NAVIGATION_LAYOUT_CHOICE_LARGE
                )
            )
        ));

        new CustomizerItem(self::NAVIGATION_AUTHOR_NAME, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Author Name', 'minimalistique'),
            "description" => __('If the Full Navigation Layout is active, sets the author name in the top left side of the navigation.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "priority" => 1,
            "conditions" => array(
                self::NAVIGATION_LAYOUT_STYLE => array(
                    self::NAVIGATION_LAYOUT_CHOICE_LARGE
                )
            )
        ));

        new CustomizerItem(self::NAVIGATION_AUTHOR_TAGLINE, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Author Tagline', 'minimalistique'),
            "description" => __('If the Full Navigation Layout is active, sets the author tagline in the top left side of the navigation.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "priority" => 1,
            "conditions" => array(
                self::NAVIGATION_LAYOUT_STYLE => array(
                    self::NAVIGATION_LAYOUT_CHOICE_LARGE
                )
            )
        ));

        new CustomizerItem(self::NAVIGATION_RIGHTALIGNED_BUTTON_TEXT, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Right-Aligned Button Text', 'minimalistique'),
            "description" => __('If the Full Navigation Layout is active, sets the text of the button in the top right side of the navigation.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "priority" => 1,
            "conditions" => array(
                self::NAVIGATION_LAYOUT_STYLE => array(
                    self::NAVIGATION_LAYOUT_CHOICE_LARGE,
                    self::NAVIGATION_LAYOUT_CHOICE_BUSINESS
                )
            )
        ));

        new CustomizerItem(self::NAVIGATION_RIGHTALIGNED_BUTTON_LINK, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Right-Aligned Button Link', 'minimalistique'),
            "description" => __('If the Full Navigation Layout is active, sets the link of the button in the top right side of the navigation.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "priority" => 1,
            "conditions" => array(
                self::NAVIGATION_LAYOUT_STYLE => array(
                    self::NAVIGATION_LAYOUT_CHOICE_LARGE,
                    self::NAVIGATION_LAYOUT_CHOICE_BUSINESS
                )
            )
        ));
        new CustomizerItem(self::NAVIGATION_RIGHTALIGNED_BUTTON_TARGETBLANK, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Open Link in new Window/Tab', 'minimalistique'),
            "description" => __('When this setting is enabled, the link of the button will be opened in a new window/tab when clicked.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "priority" => 1,
            "default" => self::$CONTROL_DEFAULTS[self::NAVIGATION_RIGHTALIGNED_BUTTON_TARGETBLANK],
            "conditions" => array(
                self::NAVIGATION_LAYOUT_STYLE => array(
                    self::NAVIGATION_LAYOUT_CHOICE_LARGE,
                    self::NAVIGATION_LAYOUT_CHOICE_BUSINESS
                )
            )
        ));

        new CustomizerItem(self::NAVIGATION_SEARCHBAR_ENABLED, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Search Bar & Button', 'minimalistique'),
            "description" => __('When this setting is enabled, a search button and bar will be added to the navigation layout.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::NAVIGATION,
            "default" => self::$CONTROL_DEFAULTS[self::NAVIGATION_SEARCHBAR_ENABLED],
            "conditions" => array(
                self::NAVIGATION_LAYOUT_STYLE => array(
                    self::NAVIGATION_LAYOUT_CHOICE_BUSINESS
                )
            )
        ));


        /*
        *
        * SIDEBAR
        *
        */
        /* Layout */
        new CustomizerItem(self::SIDEBAR_WOOCOMMERCE_HIDE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Sidebar on WooCommerce Pages', 'minimalistique'),
            "description" => __('Enabling this setting will hide the sidebar on WooCommerce pages.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SIDEBAR,
            "default" => 0
        ));
        new CustomizerItem(self::BLOGFEED_HIDE_SIDEBAR, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Sidebar on Blog Feed, Search Page and Archive Pages', 'minimalistique'),
            "description" => __('Enabling this setting will hide the sidebar on the blog feed, search page and archive pages and use the full width of the page for the page content.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SIDEBAR,
            "default" => self::$CONTROL_DEFAULTS[self::BLOGFEED_HIDE_SIDEBAR]
        ));

        new CustomizerItem(self::SINGLE_HIDE_SIDEBAR, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Sidebar on Posts & Pages', 'minimalistique'),
            "description" => __('Enabling this setting will hide the sidebar on the posts and pages and use the full width of the page for the page content.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SIDEBAR,
            "default" => self::$CONTROL_DEFAULTS[self::SINGLE_HIDE_SIDEBAR]
        ));

        /*
        *
        * FOOTER
        *
        */
        /* Layout */
        new CustomizerItem(self::FOOTER_GOTOTOP_HIDE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide "Go To Top" Button', 'minimalistique'),
            "description" => __('Enabling this setting will hide the "Go To Top" button in the footer.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::FOOTER,
            "default" => self::$CONTROL_DEFAULTS[self::FOOTER_GOTOTOP_HIDE]
        ));


        /*
        *
        * PAGE_404
        *
        */
        /* Layout */
        new CustomizerItem(self::PAGE_404_HIDE_POSTS, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Recent Posts', 'minimalistique'),
            "description" => __('Enabling this setting will hide the recent posts on the 404 page.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::PAGE_404,
            "default" => self::$CONTROL_DEFAULTS[self::PAGE_404_HIDE_POSTS]
        ));
        /*



        /*
        *
        * COPYRIGHT
        *
        */
        new CustomizerItem(self::COPYRIGHT_TEXT, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('Copyright Text', 'minimalistique'),
            "description" => __('Replaces the copyright text in the footer.', 'minimalistique'),
            "section" => CustomizerSections::COPYRIGHT,
            "priority" => 1,
        ));


        /*
        *
        * BLOG FEED
        *
        */
        /* Layout */
        new CustomizerItem(self::BLOGFEED_COLUMNS_STYLE, array(
            "type" => CustomizerType::CONTROL_RADIO_IMAGE,
            "label" => __('Blog Feed Column Layout', 'minimalistique'),
            "description" => __('Select the layout of the columns on your blog feed.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG . self::SPBLT,
            "default" => self::$CONTROL_DEFAULTS[self::BLOGFEED_COLUMNS_STYLE],
            "choices" => array(
                self::BLOGFEED_ONE_COLUMNS => '<svg xmlns="http://www.w3.org/2000/svg" width="119.958" height="119.939" viewBox="0 0 119.958 119.939"><title>' . esc_html__("1-Column Layout", "minimalistique") . '</title><g transform="translate(-154 -253)"><g transform="translate(-100.545 196.091)"><rect width="76.966" height="33.753" transform="translate(275.933 66.878)" /><rect width="73.583" height="1.984" transform="translate(275.933 104.646)" /><rect width="65.932" height="1.984" transform="translate(275.933 111.672)" /><rect width="76.966" height="33.753" transform="translate(275.933 122.027)" /><rect width="73.583" height="1.984" transform="translate(275.933 159.795)" /><rect width="65.932" height="1.984" transform="translate(275.933 166.821)" /><path d="M373.5,57.034H254.566v119.94H374.524V57.034ZM256.559,174.981V59.027H372.532V174.981Z" /></g></g></svg>',
                self::BLOGFEED_TWO_COLUMNS =>  '<svg xmlns="http://www.w3.org/2000/svg" width="119.958" height="119.94" viewBox="0 0 119.958 119.94"><title>' . esc_html__("2-Column Layout", "minimalistique") . '</title><g transform="translate(-154.021 -390.53)"><g transform="translate(-100.545 196.091)"><rect width="46.966" height="32.983" transform="translate(262.528 202.372)" /><rect width="43.902" height="1.984" transform="translate(262.528 239.371)" /><rect width="41.881" height="1.984" transform="translate(262.528 246.396)" /><rect width="44.466" height="32.983" transform="translate(319.515 202.308)" /><rect width="41.693" height="1.984" transform="translate(319.515 239.307)" /><rect width="39.688" height="1.984" transform="translate(319.515 246.332)" /><rect width="44.466" height="32.983" transform="translate(319.515 260.712)" /><rect width="41.693" height="1.984" transform="translate(319.515 297.711)" /><rect width="39.688" height="1.984" transform="translate(319.515 304.736)" /><rect width="46.895" height="32.983" transform="translate(262.528 260.712)" /><rect width="43.902" height="1.984" transform="translate(262.528 297.711)" /><rect width="41.859" height="1.984" transform="translate(262.528 304.736)" /><path d="M373.5,194.439H254.566v119.94H374.524V194.439ZM256.559,312.386V196.432H372.532V312.386Z" /></g></g></svg>',
                self::BLOGFEED_THREE_COLUMNS => '<svg xmlns="http://www.w3.org/2000/svg" width="119.958" height="119.939" viewBox="0 0 119.958 119.939"><title>' . esc_html__("3-Column Layout", "minimalistique") . '</title><g transform="translate(-154.042 -557.096)"><g transform="translate(-100.545 196.091)"><rect width="29.776" height="32.983" transform="translate(262.549 368.937)" /><rect width="27.004" height="1.984" transform="translate(262.549 405.936)" /><rect width="24.998" height="1.984" transform="translate(262.549 412.961)" /><rect width="29.776" height="32.983" transform="translate(299.678 368.937)" /><rect width="27.004" height="1.984" transform="translate(299.678 405.936)" /><rect width="24.998" height="1.984" transform="translate(299.678 412.961)" /><rect width="29.776" height="32.983" transform="translate(336.615 368.873)" /><rect width="27.004" height="1.984" transform="translate(336.615 405.872)" /><rect width="24.998" height="1.984" transform="translate(336.615 412.898)" /><rect width="29.776" height="32.983" transform="translate(262.549 427.277)" /><rect width="27.004" height="1.984" transform="translate(262.549 464.276)" /><rect width="24.998" height="1.984" transform="translate(262.549 471.302)" /><rect width="29.776" height="32.983" transform="translate(299.678 427.277)" /><rect width="27.004" height="1.984" transform="translate(299.678 464.276)" /><rect width="24.998" height="1.984" transform="translate(299.678 471.302)" /><rect width="29.776" height="32.983" transform="translate(336.615 427.214)" /><rect width="27.004" height="1.984" transform="translate(336.615 464.212)" /><rect width="24.998" height="1.984" transform="translate(336.615 471.238)" /><path d="M373.519,361.005H254.587V480.944H374.545V361.005ZM256.579,478.952V363H372.553V478.952Z" /></g></g></svg>',
                self::BLOGFEED_TWO_COLUMNS_MASONRY => '<svg width="120" height="120" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg"><title>' . esc_html__("2-Column Masonry Layout", "minimalistique") . '</title><g><rect x="1" y="1" width="118" height="118" rx="3" fill="none" stroke-width="2"/><rect x="6" y="6" width="51" height="20" rx="4" /><rect x="6" y="30" width="28" height="4" rx="2" /><rect x="6" y="38" width="16" height="4" rx="2" /><rect x="63" y="78" width="51" height="20" rx="4" /><rect x="63" y="102" width="28" height="4" rx="2" /><rect x="63" y="110" width="16" height="4" rx="2" /><rect x="6" y="50" width="51" height="48" rx="4" /><rect x="6" y="102" width="28" height="4" rx="2" /><rect x="6" y="110" width="16" height="4" rx="2" /><rect x="63" y="6" width="51" height="48" rx="4" /><rect x="63" y="58" width="28" height="4" rx="2" /><rect x="63" y="66" width="16" height="4" rx="2" /></g></svg>',
                self::BLOGFEED_THREE_COLUMNS_MASONRY => '<svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg"><title>' . esc_html__("3-Column Masonry Layout", "minimalistique") . '</title><g><rect x="1" y="1" width="118" height="118" rx="3" fill="none" stroke-width="2"/><rect x="6" y="6" width="32" height="20" rx="4" /><rect x="6" y="30" width="28" height="4" rx="2" /><rect x="6" y="38" width="16" height="4" rx="2" /><rect x="82" y="6" width="32" height="20" rx="4" /><rect x="82" y="30" width="28" height="4" rx="2" /><rect x="82" y="38" width="16" height="4" rx="2" /><rect x="6" y="50" width="32" height="48" rx="4" /><rect x="6" y="102" width="28" height="4" rx="2" /><rect x="6" y="110" width="16" height="4" rx="2" /><rect x="82" y="50" width="32" height="48" rx="4" /><rect x="82" y="102" width="28" height="4" rx="2" /><rect x="82" y="110" width="16" height="4" rx="2" /><rect x="44" y="6" width="32" height="48" rx="4" /><rect x="44" y="58" width="28" height="4" rx="2" /><rect x="44" y="66" width="16" height="4" rx="2" /><rect x="44" y="78" width="32" height="20" rx="4" /><rect x="44" y="102" width="28" height="4" rx="2" /><rect x="44" y="110" width="16" height="4" rx="2" /></g></svg>',
                self::BLOGFEED_ONE_COLUMN_ALTERNATIVE => '<svg xmlns="http://www.w3.org/2000/svg" width="119.958" height="119.94" viewBox="0 0 119.958 119.94"><title>' . esc_html__("1-Column Side-by-Side Layout", "minimalistique") . '</title><g transform="translate(-1105 -422)"> <g> <g> <g transform="translate(0 -1.612)"> <rect width="44.9" height="32.983" transform="translate(1112.962 429.933)"/> <rect width="46.267" height="1.984" transform="translate(1164.962 434.895)"/> <rect width="46.267" height="1.984" transform="translate(1164.962 448.945)"/> <rect width="47.246" height="1.984" transform="translate(1164.962 441.92)"/> <rect width="44.246" height="1.984" transform="translate(1164.962 455.97)"/> </g> <g transform="translate(0 35.703)"> <rect width="44.9" height="32.983" transform="translate(1112.962 429.933)"/> <rect width="46.267" height="1.984" transform="translate(1164.962 434.895)"/> <rect width="46.267" height="1.984" transform="translate(1164.962 448.945)"/> <rect width="47.246" height="1.984" transform="translate(1164.962 441.92)"/> <rect width="44.246" height="1.984" transform="translate(1164.962 455.97)"/> </g> <g transform="translate(0 72.703)"> <rect width="44.9" height="32.983" transform="translate(1112.962 429.933)"/> <rect width="46.267" height="1.984" transform="translate(1164.962 434.895)"/> <rect width="46.267" height="1.984" transform="translate(1164.962 448.945)"/> <rect width="47.246" height="1.984" transform="translate(1164.962 441.92)"/> <rect width="44.246" height="1.984" transform="translate(1164.962 455.97)"/> </g> <path d="M373.5,194.439H254.566v119.94H374.524V194.439ZM256.559,312.386V196.432H372.532V312.386Z" transform="translate(850.434 227.561)"/> </g> </g> </g> </svg>'
            )
        ));

        new CustomizerItem(self::BLOGFEED_SHOW_FULL_POSTS, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Show Full Posts', 'minimalistique'),
            "description" => __('Enabling this setting will display the full posts instead of excerpts.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG  . self::SPBLT,
            "default" => 0
        ));

        new CustomizerItem(self::BLOGFEED_SHOW_READMORE_BUTTON, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Show "Continue reading" Button', 'minimalistique'),
            "description" => __('Enabling this setting will add a "Continue reading" button below every blog post excerpt, if "Show Full Posts" is not enabled.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG  . self::SPBLT,
            "default" => self::$CONTROL_DEFAULTS[self::BLOGFEED_SHOW_READMORE_BUTTON]
        ));

        new CustomizerItem(self::BLOGFEED_HIDE_BYLINE_IMAGE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Author Image from Byline', 'minimalistique'),
            "description" => __('Enabling this setting will hide the author image from the byline.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG,
            "default" => self::$CONTROL_DEFAULTS[self::BLOGFEED_HIDE_BYLINE_IMAGE]
        ));

        new CustomizerItem(self::BLOGFEED_HIDE_BYLINE_AUTHOR, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Author Name from Byline', 'minimalistique'),
            "description" => __('Enabling this setting will hide the author name from the byline.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG  . self::SPBLT,
            "default" => 0
        ));

        new CustomizerItem(self::BLOGFEED_FEATURED_IMAGE_STYLE, array(
            "type" => CustomizerType::CONTROL_RADIO,
            "label" => __('Featured Image Layout', 'minimalistique'),
            "description" => __('Select the layout of the featured images on your blog feed.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG,
            "default" => self::$CONTROL_DEFAULTS[self::BLOGFEED_FEATURED_IMAGE_STYLE],
            "choices" => array(
                self::BLOGFEED_FEATURED_IMAGE_CHOICE_FULL_IMAGE => "Full Image",
                self::BLOGFEED_FEATURED_IMAGE_CHOICE_COVER_IMAGE => "Scale to fit Recommended Size",
                self::BLOGFEED_FEATURED_IMAGE_CHOICE_FULL_IMAGE_COVER_BLUR => "Keep Full Image, But Fill Background to Recommended Size"
            )
        ));

        new CustomizerItem(self::BLOGFEED_HIDE_CATEGORY_FEATURED_IMAGE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Category', 'minimalistique'),
            "description" => __('Enabling this setting will hide the post category shown on the featured image.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG  . self::SPBLT,
            "default" => 0
        ));

        new CustomizerItem(self::BLOGFEED_FEATURED_IMAGE_PLACEHOLDER, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Display Placeholder Featured Image', 'minimalistique'),
            "description" => __('Enabling this setting will display a placeholder featured image for all posts that do not have a featured image set.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::BLOG  . self::SPBLT,
            "default" => 0
        ));


        /*
        *
        * SINGLE / POSTS & PAGES / POSTS / PAGES
        *
        */
        /* Layout */
        new CustomizerItem(self::SINGLE_FEATURED_IMAGE_STYLE, array(
            "type" => CustomizerType::CONTROL_RADIO,
            "label" => __('Featured Image Layout', 'minimalistique'),
            "description" => __('Select the layout of the featured images on your blog feed.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SINGLE,
            "default" => self::$CONTROL_DEFAULTS[self::SINGLE_FEATURED_IMAGE_STYLE],
            "choices" => array(
                self::SINGLE_FEATURED_IMAGE_CHOICE_FULL_IMAGE => "Full Image",
                self::SINGLE_FEATURED_IMAGE_CHOICE_COVER_IMAGE => "Scale to fit Recommended Size",
                self::SINGLE_FEATURED_IMAGE_CHOICE_FULL_IMAGE_COVER_BLUR => "Keep Full Image, But Fill Background to Recommended Size"
            )
        ));

        new CustomizerItem(self::SINGLE_HIDE_BYLINE_IMAGE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Author Image from Byline', 'minimalistique'),
            "description" => __('Enabling this setting will hide the author image from the byline.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SINGLE,
            "default" => self::$CONTROL_DEFAULTS[self::SINGLE_HIDE_BYLINE_IMAGE]
        ));

        new CustomizerItem(self::SINGLE_HIDE_BYLINE_AUTHOR, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Author Name from Byline', 'minimalistique'),
            "description" => __('Enabling this setting will hide the author name from the byline.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SINGLE  . self::SPBLT,
            "default" => 0
        ));

        new CustomizerItem(self::SINGLE_DISPLAY_ABOUT_AUTHOR, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Display About The Author Section', 'minimalistique'),
            "description" => __('Enabling this setting will display a section with information about the author.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SINGLE  . self::SPBLT,
            "default" => 0
        ));
        new CustomizerItem(self::SINGLE_HIDE_RELATED_POSTS, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Related Posts', 'minimalistique'),
            "description" => __('Enabling this setting will hide the related posts section.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SINGLE  . self::SPBLT,
            "default" => self::$CONTROL_DEFAULTS[self::SINGLE_HIDE_RELATED_POSTS]
        ));
        new CustomizerItem(self::SINGLE_HIDE_NEXT_PREV, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Next/Previous Post Buttons', 'minimalistique'),
            "description" => __('Enabling this setting will hide the "Next" and "Previous" Post Pagination Buttons.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SINGLE  . self::SPBLT,
            "default" => 0
        ));
        new CustomizerItem(self::SINGLE_HIDE_CATEGORIES_TAGS, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Categories and Tags', 'minimalistique'),
            "description" => __('Enabling this setting will hide the categories- and tags sections.', 'minimalistique'),
            "section" => CustomizerPanels::LAYOUT . CustomizerSections::SINGLE  . self::SPBLT,
            "default" => 0
        ));
    }

    private function CreateColorCustomizerItem($customizerColor, $is_dark_variant = false)
    {
        new CustomizerItem($customizerColor->GetId(), array(
            "type" => CustomizerType::CONTROL_COLOR,
            "label" => $customizerColor->GetLabel(),
            "description" => $customizerColor->GetDescription(),
            "section" => $is_dark_variant ? 'minimalistique-color-scheme-dark-variations' : CustomizerSections::COLOR_SCHEME,
            "default" => $customizerColor->GetDefault(),
            "conditions" => $customizerColor->GetConditions()
        ));
    }

    public static function OverwriteDefault($control, $value)
    {
        self::$CONTROL_DEFAULTS[$control] = $value;
    }

    public static function GetSelectedOrDefault($control)
    {
        $theme_mod = \get_theme_mod($control);
        if (($theme_mod || empty($theme_mod)) && $theme_mod !== false) {
            return $theme_mod;
        }

        return self::GetDefault($control);
    }

    public static function GetDefault($control)
    {
        if (isset(self::$CONTROL_DEFAULTS[$control])) {
            return self::$CONTROL_DEFAULTS[$control];
        }
        // No default for control found
        // Maybe a color control 
        return CustomizerController::GetColorScheme()->MaybeGetDefault($control);
    }
}
