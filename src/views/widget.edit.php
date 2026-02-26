<?php
(new CWidgetFormView($data))
    ->addField(new CWidgetFieldTextBoxView($data['fields']['button_text']))
    ->addField(new CWidgetFieldTextBoxView($data['fields']['button_url']))
    ->addField((new CWidgetFieldTextAreaView($data['fields']['custom_style']))->setAdaptiveWidth(ZBX_TEXTAREA_BIG_WIDTH))
    ->show();
