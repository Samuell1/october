<?php

namespace Cms\ReportWidgets;

use Lang;
use Exception;
use BackendAuth;
use Cms\Classes\Theme;
use ApplicationException;
use Cms\Models\MaintenanceSetting;
use Backend\Classes\ReportWidgetBase;

/**
 * Active theme report widget.
 *
 * @author Alexey Bobkov, Samuel Georges
 */
class ActiveTheme extends ReportWidgetBase
{
    /**
     * @var string A unique alias to identify this widget.
     */
    protected $defaultAlias = 'activetheme';

    /**
     * Renders the widget.
     */
    public function render()
    {
        try {
            $this->loadData();
        } catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'cms::lang.dashboard.active_theme.widget_title_default',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function loadAssets()
    {
        $this->addCss('css/activetheme.css', 'core');
    }

    protected function loadData()
    {
        if (! $theme = Theme::getActiveTheme()) {
            throw new ApplicationException(Lang::get('cms::lang.theme.not_found_name', ['name'=>Theme::getActiveThemeCode()]));
        }

        $this->vars['theme'] = $theme;
        $this->vars['inMaintenance'] = MaintenanceSetting::get('is_enabled');
        $this->vars['canManage'] = BackendAuth::getUser()->hasAccess('cms.manage_themes');
        $this->vars['canConfig'] = BackendAuth::getUser()->hasAccess('cms.manage_theme_options');
    }
}
