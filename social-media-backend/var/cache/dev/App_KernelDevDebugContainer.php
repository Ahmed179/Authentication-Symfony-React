<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUFpaF4f\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUFpaF4f/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUFpaF4f.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUFpaF4f\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUFpaF4f\App_KernelDevDebugContainer([
    'container.build_hash' => 'UFpaF4f',
    'container.build_id' => '291112bb',
    'container.build_time' => 1628508899,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUFpaF4f');
