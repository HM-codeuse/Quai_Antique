<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGY0BxDd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGY0BxDd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGY0BxDd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGY0BxDd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGY0BxDd\App_KernelDevDebugContainer([
    'container.build_hash' => 'GY0BxDd',
    'container.build_id' => '67683c00',
    'container.build_time' => 1683019604,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGY0BxDd');
