<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2fm56xt\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2fm56xt/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container2fm56xt.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container2fm56xt\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container2fm56xt\srcDevDebugProjectContainer(array(
    'container.build_hash' => '2fm56xt',
    'container.build_id' => '5fdf2dbd',
    'container.build_time' => 1542641979,
), __DIR__.\DIRECTORY_SEPARATOR.'Container2fm56xt');
