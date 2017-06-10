<?php

namespace mervick\emojionearea;

/**
 * Class EmojiOneAsset
 * @package mervick\emojionearea
 */
class EmojiOneAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/mervick/emojionearea/';

    //vendor/mervick/emojionearea/dist/emojionearea.min.js
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->js = [!YII_DEBUG ? 'dist/emojionearea.min.js' : 'dist/emojionearea.js'];
        $this->css = [!YII_DEBUG ? 'dist/emojionearea.min.css' : 'dist/emojionearea.css'];

        parent::init();
    }
}