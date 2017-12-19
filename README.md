# yii2-jqery-qrcode-asset

## 安装

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist xutl/yii2-jquery-qrcode-widget
```

or add

```json
"xutl/yii2-jquery-qrcode-widget": "~1.0.0"
```

to the `require` section of your `composer.json`.

## 使用

```php
<?= xutl\jquery\qrcode\QRCode::widget(['clientOptions' => ['text'=>'https://www.baidu.com']]);?>
```
