<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLYIuGgB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLYIuGgB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLYIuGgB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLYIuGgB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLYIuGgB\App_KernelDevDebugContainer([
    'container.build_hash' => 'LYIuGgB',
    'container.build_id' => '5b566d30',
    'container.build_time' => 1683837581,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLYIuGgB');
