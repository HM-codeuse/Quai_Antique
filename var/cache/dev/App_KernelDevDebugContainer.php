<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKeCnirw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKeCnirw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKeCnirw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKeCnirw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKeCnirw\App_KernelDevDebugContainer([
    'container.build_hash' => 'KeCnirw',
    'container.build_id' => '906d1fef',
    'container.build_time' => 1684141867,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKeCnirw');
