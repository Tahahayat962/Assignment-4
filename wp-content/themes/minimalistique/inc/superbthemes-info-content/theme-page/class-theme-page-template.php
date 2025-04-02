<?php

namespace SuperbThemesThemeInformationContent\ThemePage;

defined("ABSPATH") || exit();

class ThemePageTemplate
{
    private $Theme;
    private $ParentName;
    private $ThemeName;
    private $PremiumText;
    private $Type;

    private $Features;
    private $ThemeLink;
    private $ThemePremiumLink;
    private $DemoLink;
    private $ContactLink;

    public function __construct($data)
    {
        $this->Theme = wp_get_theme();
        $this->ParentName = is_child_theme() ? wp_get_theme($this->Theme->Template) : '';
        $this->ThemeName = is_child_theme() ? sprintf(/* translators: %s are theme names */__("%s and %s", 'minimalistique'), $this->Theme, $this->ParentName) : $this->Theme;
        $this->PremiumText = is_child_theme() ? sprintf(/* translators: %s are theme names */__("Unlock all features by upgrading to the premium edition of %s and its parent theme %s.", 'minimalistique'), $this->Theme, $this->ParentName) : sprintf(/* translators: %s is a theme name */__("Unlock all features by upgrading to the premium edition of %s.", 'minimalistique'), $this->Theme);
        $this->ThemeLink = !empty($data['theme_url']) ? $data['theme_url'] : 'https://superbthemes.com/';
        $this->DemoLink = !empty($data['demo_url']) ? $data['demo_url'] . '?su_source=theme_settings' : 'https://superbthemes.com/';
        $this->ContactLink = 'https://superbthemes.com/contact/?su_source=theme_settings';
        $this->Type = $data['type'];
        $base_features = array(
            array(
                'title' => __("Fully Search Engine Optimized", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-8.png",
                'description' => __("Get free traffic by ranking #1 on Google with the lightning-fast & SEO-optimized premium version.", "minimalistique"),
                'source' => 'seo'
            ),
            array(
                'title' => __("Page Speed Optimized", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-6.png",
                'description' => __("Unlock maximum speed with the premium version. It loads in less than 0.3 seconds. ", "minimalistique"),
                'source' => 'speed'
            ),
            array(
                'title' => __("Customize Everything", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-7.png",
                'description' => __("Customize the design to fit your brand or style with our easy-to-use customization options.", "minimalistique"),
                'source' => 'customization'
            ),
            array(
                'title' => __("E-commerce Compatibility", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-5.png",
                'description' => __("Create your online store easily. The premium version is compatible with all popular e-commerce plugins.", "minimalistique"),
                'source' => 'ecommerce'
            ),
            array(
                'title' => __("Customer Support & Documentation", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-4.png",
                'description' => __("Benefit from our comprehensive documentation and dedicated support team, always ready to help.", "minimalistique"),
                'source' => 'support'
            ),
            array(
                'title' => __("Works With All Page Builders", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-3.png",
                'description' => __("Brizy, Elementor, Divi Builder, Beaver Builder - you name it. Every page builder plugin is compatible.", "minimalistique"),
                'source' => 'page_builders'
            ),
            array(
                'title' => __("1-Click Starter Content Import", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-2.png",
                'description' => __("Get started easily with our one-click demo content import feature. Get your website up and running in seconds.", "minimalistique"),
                'source' => 'starter_content'
            ),
            array(
                'title' => __("Premium Designs, Patterns & Layouts", "minimalistique"),
                'base' => true,
                'icon' => "img-icon-1.png",
                'description' => __("Access all the premium layouts and designs perfect for any niche or industry.", "minimalistique"),
                'source' => 'designs'
            ),
            array(
                'title' => __("Works On All Devices And Browsers", "minimalistique"),
                'base' => true,
                'icon' => "devices-duotone.svg",
                'description' => __("The premium version looks perfect everywhere, from desktop to mobile, and in every browser.", "minimalistique"),
                'source' => 'devices'
            ),
            array(
                'title' => __("AMP Compatible And Mobile Ready", "minimalistique"),
                'base' => true,
                'icon' => "fse_icon_mobile.svg",
                'description' => __("Stay ahead with Accelerated Mobile Pages (AMP) compatibility.", "minimalistique"),
                'source' => 'amp'
            ),
            array(
                'title' => __("GDPR Compliant", "minimalistique"),
                'base' => true,
                'icon' => "shield-check-duotone.svg",
                'description' => __("Our premium version comes fully compliant, giving you peace of mind about user data protection and privacy.", "minimalistique"),
                'source' => 'gdpr'
            ),
            array(
                'title' => __("Frequent Updates", "minimalistique"),
                'base' => true,
                'icon' => "arrows-clockwise-duotone.svg",
                'description' => __("Our premium version provides frequent enhancements for security, performance, and features.", "minimalistique"),
                'source' => 'updates'
            ),
            array(
                'title' => __("Child Themes", "minimalistique"),
                'base' => true,
                'icon' => "img-2.png",
                'description' => __("Use child themes to make modifications without affecting the parent theme's code, ensuring smooth updates.", "minimalistique"),
                'source' => 'child_themes'
            ),
            array(
                'title' => __("WordPress blocks", "minimalistique"),
                'base' => true,
                'icon' => "stack-duotone.png",
                'description' => __("Use our many custom WordPress Gutenberg blocks for every purpose!", "minimalistique"),
                'source' => 'blocks'
            ),
            array(
                'title' => __("WordPress patterns", "minimalistique"),
                'base' => true,
                'icon' => "grid-nine-duotone.png",
                'description' => __("Take advantage of the 400+ beautiful patterns for every type of website.", "minimalistique"),
                'source' => 'patterns'
            ),
            array(
                'title' => __("Elementor sections", "minimalistique"),
                'base' => true,
                'icon' => "img-1.png",
                'description' => __("Access 300+ pre-built Elementor sections and build beautiful sites, fast.", "minimalistique"),
                'source' => 'elementor'
            )
        );
        $this->Features = $data['features'] ? array_merge($base_features, $data['features']) : $base_features;

        $this->Render();
    }

    private function Render()
    {
?>
        <div class="wrap">
            <div class="spt-theme-settings-wrapper">
                <div class="spt-theme-settings-wrapper-main-content">

                    <div class="spt-theme-settings-wrapper-main-content-section">
                        <div class="spt-theme-settings-wrapper-main-content-section-top">
                            <span class="spt-theme-settings-headline"><?php esc_html_e("Customize Settings", 'minimalistique'); ?></span>
                            <?php if ($this->Type === 'block') : ?>
                                <a class="spt-theme-settings-headline-link" href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e("Go To Site Editor", 'minimalistique'); ?></a>
                            <?php else : ?>
                                <a class="spt-theme-settings-headline-link" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php esc_html_e("Go To Customizer", 'minimalistique'); ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="spt-theme-settings-content">

                            <div class="spt-theme-settings-content-getting-started-wrapper">
                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/list-bullets.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Add Menus", 'minimalistique'); ?>
                                        </div>
                                        <p><?php esc_html_e("Add a navigation to your website to improve the user experience.", 'minimalistique'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <?php if ($this->Type === 'block') : ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e("Go To Site Editor", 'minimalistique'); ?></a>
                                        <?php else: ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"><?php esc_html_e("Go to Menus", "minimalistique"); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/squares-four.svg'); ?>" />
                                        <?php if ($this->Type === 'block') : ?>
                                            <div class="spt-theme-settings-content-item-headline">
                                                <?php esc_html_e("Edit Front Page", 'minimalistique'); ?>
                                            </div>
                                            <p><?php esc_html_e("Edit and customize your front page design through the site editor.", 'minimalistique'); ?></p>
                                        <?php else: ?>
                                            <div class="spt-theme-settings-content-item-headline">
                                                <?php esc_html_e("Add Widgets", 'minimalistique'); ?>
                                            </div>
                                            <p><?php esc_html_e("Add and customize widgets in any widget space.", 'minimalistique'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <?php if ($this->Type === 'block') : ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e("Go To Site Editor", 'minimalistique'); ?></a>
                                        <?php else: ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('widgets.php')); ?>"><?php esc_html_e("Go to Widgets", 'minimalistique'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/paint-brush.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Customize Design", 'minimalistique'); ?>
                                        </div>
                                        <p><?php esc_html_e("Customize your website design to fit your personality or brand.", 'minimalistique'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <?php if ($this->Type === 'block') : ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e("Go To Site Editor", 'minimalistique'); ?></a>
                                        <?php else: ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php esc_html_e("Go To Customizer", 'minimalistique'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/text-a-underline.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Change Site Title", 'minimalistique'); ?>
                                        </div>
                                        <p><?php esc_html_e("Add your website name and tagline to improve the design and SEO.", 'minimalistique'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <?php if ($this->Type === 'block') : ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e("Go To Site Editor", 'minimalistique'); ?></a>
                                        <?php else: ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php esc_html_e("Go To Customizer", 'minimalistique'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/image.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Upload Logo", 'minimalistique'); ?>
                                        </div>
                                        <p><?php esc_html_e("Add a custom logo to make your website look more professional.", 'minimalistique'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <?php if ($this->Type === 'block') : ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('site-editor.php'))  ?>"><?php esc_html_e("Go To Site Editor", 'minimalistique'); ?></a>
                                        <?php else: ?>
                                            <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php esc_html_e("Go To Customizer", 'minimalistique'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="spt-theme-settings-content-item">
                                    <div class="spt-theme-settings-content-item-header">
                                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/file.svg'); ?>" />
                                        <div class="spt-theme-settings-content-item-headline">
                                            <?php esc_html_e("Create New Pages", 'minimalistique'); ?>
                                        </div>
                                        <p><?php esc_html_e("Start creating your website by adding pages to it.", 'minimalistique'); ?></p>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('edit.php?post_type=page')) ?>"><?php esc_html_e("Create a new page", 'minimalistique'); ?></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-main-content-section">
                        <div class="spt-theme-settings-wrapper-main-content-section-top">
                            <span class="spt-theme-settings-headline"><?php esc_html_e("Premium Features", 'minimalistique'); ?></span>
                            <a class="spt-theme-settings-headline-link" href="<?php echo esc_url($this->ThemeLink . "?su_source=theme_settings_unlock_all"); ?>"><?php esc_html_e("Unlock All Features", 'minimalistique'); ?></a>
                        </div>
                        <p class="spt-theme-settings-wrapper-main-content-section-top-description">
                            <?php esc_html_e("Create a beautiful website easily, without coding.", 'minimalistique'); ?>
                        </p>

                        <div class="spt-theme-settings-content spt-theme-settings-content-us">
                            <?php
                            foreach ($this->Features as $feature) :
                                $source = isset($feature['source']) ? $feature['source'] : 'theme_settings';
                                $icon = isset($feature['icon']) ? $feature['icon'] : 'img-icon-7.png';
                            ?>
                                <a target="_blank" href="<?php echo esc_url($this->ThemeLink . "?su_source=theme_settings_feature_" . $source); ?>" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
                                    <span class="spt-theme-settings-content-item-unavailable-premium"><?php echo esc_html__("Premium", 'minimalistique'); ?></span>
                                    <div class="spt-theme-settings-content-item-header">
                                        <div>
                                            <img height="32" width="32" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/' . $icon); ?>" />
                                        </div>
                                        <span class="spt-theme-settings-content-us-title"><?php echo esc_html($feature["title"]); ?></span></span>
                                        <?php if (isset($feature['description'])) : ?>
                                            <p><?php echo esc_html($feature['description']); ?></p>
                                        <?php else : ?>
                                            <p><?php echo esc_html(sprintf(__("With %s Premium you'll have full access to this feature as well as all the other features listed.", 'minimalistique'), $this->ThemeName)); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spt-theme-settings-content-item-content">
                                        <span class="spt-theme-settings-content-us-button-link"><?php esc_html_e("Get Premium Version", 'minimalistique'); ?></span>
                                    </div>
                                </a>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="spt-theme-settings-wrapper-sidebar">
                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <img class="spt-theme-settings-wrapper-sidebar-item-content-demo-image" src="<?php echo esc_url(get_template_directory_uri() . '/screenshot.png'); ?>" alt="<?php echo esc_attr($this->ThemeName); ?> Preview" />
                            <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("View Demo", 'minimalistique'); ?></div>
                            <p><?php echo esc_html__("Need inspiration? Take a moment to view our theme demo!", 'minimalistique') ?></p>
                            <a href="<?php echo esc_url($this->DemoLink); ?>" target="_blank" class="button"><?php esc_html_e("View Demo", 'minimalistique'); ?></a>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/color-crown.svg'); ?>" />
                        <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Upgrade to premium", 'minimalistique'); ?></div>
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <p><?php echo esc_html($this->PremiumText); ?></p>
                            <a href="<?php echo esc_url($this->ThemeLink . "?su_source=theme_settings_view_premium"); ?>" target="_blank" class="button button-primary"><?php esc_html_e("View Premium Version", 'minimalistique'); ?></a>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/chats.svg'); ?>" />
                        <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Contact support", 'minimalistique'); ?></div>
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <p><?php echo esc_html(sprintf(__("If you have issues with %s, please send us an email through our website!", 'minimalistique'), $this->Theme)); ?></p>
                            <a href="<?php echo esc_url($this->ContactLink); ?>" target="_blank" class="button"><?php esc_html_e("Contact Support", 'minimalistique'); ?></a>
                        </div>
                    </div>

                    <div class="spt-theme-settings-wrapper-sidebar-item">
                        <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/superbthemes-info-content/icons/shooting-star.svg'); ?>" />
                        <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Give us feedback", 'minimalistique'); ?></div>
                        <div class="spt-theme-settings-wrapper-sidebar-item-content">
                            <p><?php echo esc_html(sprintf(__("Do you enjoy using %s? Support us by reviewing us on WordPress.org!", 'minimalistique'), $this->Theme)); ?></p>
                            <a href="<?php echo esc_url('https://wordpress.org/support/theme/' . get_stylesheet() . '/reviews/#new-post'); ?>" target="_blank" class="button"><?php esc_html_e("Leave a Review", 'minimalistique'); ?></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
<?php
    }
}
