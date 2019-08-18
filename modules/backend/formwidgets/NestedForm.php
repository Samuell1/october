<?php

namespace Backend\FormWidgets;

use Backend\Widgets\Form;
use Backend\Classes\FormWidgetBase;

/**
 * Nested Form
 * Renders a nested form bound to a jsonable field of a model.
 *
 * @author Sascha Aeppli
 */
class NestedForm extends FormWidgetBase
{
    /**
     * {@inheritdoc}
     */
    protected $defaultAlias = 'nestedform';

    /**
     * @var [] Form configuration
     */
    public $form;

    /**
     * @var bool defines if the nested form is styled like a panel (default true).
     */
    public $usePanelStyles = true;

    /**
     * @var Form form widget reference
     */
    protected $formWidget;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->fillFromConfig([
            'form',
            'usePanelStyles',
        ]);

        $config = $this->makeConfig($this->form);
        $config->model = $this->model;
        $config->data = $this->getLoadValue();
        $config->alias = $this->alias.$this->defaultAlias;
        $config->arrayName = $this->getFieldName();
        $config->isNested = true;

        $widget = $this->makeWidget(Form::class, $config);
        $widget->bindToController();

        $this->formWidget = $widget;
    }

    protected function loadAssets()
    {
        $this->addCss('css/nestedform.css', 'core');
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('nestedform');
    }

    public function prepareVars()
    {
        $this->formWidget->previewMode = $this->previewMode;
    }
}
