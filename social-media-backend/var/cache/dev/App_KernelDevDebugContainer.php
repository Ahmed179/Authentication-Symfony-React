<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRkYVxiS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRkYVxiS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRkYVxiS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRkYVxiS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRkYVxiS\App_KernelDevDebugContainer([
    'container.build_hash' => 'RkYVxiS',
    'container.build_id' => 'b555c4ca',
    'container.build_time' => 1626770488,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRkYVxiS');
