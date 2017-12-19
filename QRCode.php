<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\jquery\qrcode;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class QRCode
 * @package xutl\jquery\qrcode
 */
class QRCode extends Widget
{
    /**
     * @var array the HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var array 参数
     */
    public $clientOptions = [];

    /**
     * 初始化
     */
    public function init()
    {
        parent::init();
        if (!isset ($this->options ['id'])) {
            $this->options ['id'] = $this->getId();
        }

        $this->clientOptions = array_merge([
            'width' => 200,
            'height' => 200,
            'correctLevel' => 1,
        ], $this->clientOptions);

    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        QRCodeAsset::register($this->view);
        echo Html::tag('div', '', $this->options);
        $options = empty ($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
        $this->view->registerJs("jQuery('#{$this->options['id']}').qrcode({$options});");
    }
}