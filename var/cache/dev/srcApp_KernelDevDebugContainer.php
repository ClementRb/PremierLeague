<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUzeX8Kd\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUzeX8Kd/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUzeX8Kd.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUzeX8Kd\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUzeX8Kd\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'UzeX8Kd',
    'container.build_id' => '4ab04dd7',
    'container.build_time' => 1553685115,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerUzeX8Kd');
