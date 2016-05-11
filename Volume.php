<?php
/**
 * Date: 10.05.2016
 * Time: 18:29
 */

namespace mihaildev\elfinder\flysystem;


use League\Flysystem\Filesystem;
use mihaildev\elfinder\volume\Base;
use yii\base\InvalidConfigException;

class Volume extends Base
{
    public $driver = 'Flysystem';

    public $separator = "/";
    public $path = "/";
    public $url;

    public $component;

    public $glideURL;
    public $glideKey;

    protected function optionsModifier($options){

        if(empty($this->component))
            throw new InvalidConfigException('The "component" property must be set.');

        /** @var Filesystem $component */

        if(is_string($this->component)){
            $component = \Yii::$app->get($this->component);
        }else{
            $component = \Yii::createObject($this->component);
        }

        if(!($component instanceof \creocoder\flysystem\Filesystem || $component instanceof Filesystem))
            throw new InvalidConfigException('A Filesystem instance is required');

        $options['separator'] = $this->separator;
        $options['filesystem'] = new Filesystem($component->getAdapter());

        $options['path'] = $this->path;

        if(!empty($this->glideURL) && !empty($this->glideKey)){
            $options['glideURL'] = $this->glideURL;
            $options['glideKey'] = $this->glideKey;
            unset($options['tmbPath']);
            unset($options['tmbURL']);
        }

        if(!empty($this->url))
            $options['URL'] = $this->url;

        return $options;
    }
}