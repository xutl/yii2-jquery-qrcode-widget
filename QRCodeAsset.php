<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\jquery\qrcode;


use yii\web\AssetBundle;
/**
 * Class QRCodeAsset
 * @package xutl\jquery\qrcode
 */
class QRCodeAsset extends AssetBundle
{
    public $sourcePath = '@xutl/jquery/qrcode/assets';

    /**
     * @var array
     */
    public $js = [
        'js/jquery.qrcode.min.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}