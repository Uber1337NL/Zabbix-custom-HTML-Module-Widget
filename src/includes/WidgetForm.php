<?php
namespace Modules\CustomHtmlWidget\Includes;
use Zabbix\Widgets\CWidgetForm;
use Zabbix\Widgets\Fields\CWidgetFieldTextBox;
use Zabbix\Widgets\Fields\CWidgetFieldTextArea;
class WidgetForm extends CWidgetForm {
    public function addFields(): self {
        return $this
            ->addField((new CWidgetFieldTextBox('button_text', _('Button Text')))->setDefault('Click here for the wallboard'))
            ->addField((new CWidgetFieldTextBox('button_url', _('Button URL')))->setDefault('https://example.com'))
            ->addField((new CWidgetFieldTextArea('custom_style', _('Custom CSS (Optional)')))->setDefault('background-color: #0275d8; color: white; padding: 10px 20px; border: none; border-radius: 4px; font-size: 16px; text-decoration: none; display: inline-block;'));
    }
}
