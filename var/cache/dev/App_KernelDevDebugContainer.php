<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYlXfqWZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYlXfqWZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYlXfqWZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYlXfqWZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYlXfqWZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'YlXfqWZ',
    'container.build_id' => '541d7e29',
    'container.build_time' => 1681374369,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYlXfqWZ');
