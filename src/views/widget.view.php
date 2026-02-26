<?php
(new CWidgetView($data))
    ->addItem((new CDiv())->addClass('custom-button-container')->addItem((new CLink($data['button_text'], $data['button_url']))->setAttribute('style', $data['custom_style'])->setAttribute('target', '_blank')))
    ->show();
