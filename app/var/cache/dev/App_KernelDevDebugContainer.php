<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPYYYyxQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPYYYyxQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPYYYyxQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPYYYyxQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPYYYyxQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'PYYYyxQ',
    'container.build_id' => '793d4771',
    'container.build_time' => 1660979053,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPYYYyxQ');
