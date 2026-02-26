<?php
namespace Modules\CustomHtmlWidget\Actions;
use CControllerDashboardWidgetView, CControllerResponseData;
class WidgetView extends CControllerDashboardWidgetView {
    protected function doAction(): void {
        $this->setResponse(new CControllerResponseData([
            'name'         => $this->getInput('name', $this->widget->getName()),
            'button_text'  => $this->fields_values['button_text'],
            'button_url'   => $this->fields_values['button_url'],
            'custom_style' => $this->fields_values['custom_style'],
            'user'         => ['debug_mode' => $this->getDebugMode()]
        ]));
    }
}
