<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRQW3dxt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRQW3dxt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRQW3dxt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRQW3dxt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRQW3dxt\App_KernelDevDebugContainer([
    'container.build_hash' => 'RQW3dxt',
    'container.build_id' => 'b71ef0b0',
    'container.build_time' => 1684011722,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRQW3dxt');
