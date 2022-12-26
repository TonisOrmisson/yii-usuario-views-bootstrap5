# yii-usuario-views-bootstrap5
A Bootstrap 5 theme for [yii2-usuario](https://github.com/2amigos/yii2-usuario)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

run:

```composer require --prefer-dist yii-usuario/yii2-usuario-views-bootstrap5```

## Usage

In your user module config set the viewPath to the views folder of this package.

```
'user' => [
    'class' => \Da\User\Module::class,
        'viewPath' => '@vendor/yii-usuario/yii-usuario-views-bootstrap5/src/views',
]
```

In your app params, set bsVersion to 4 (required by kartik select2 dependency)
```
'params' => [
    ...
    'bsVersion' => '5',
    ...
]
```


