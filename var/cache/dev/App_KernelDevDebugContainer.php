<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2x75mkq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2x75mkq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2x75mkq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2x75mkq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2x75mkq\App_KernelDevDebugContainer([
    'container.build_hash' => '2x75mkq',
    'container.build_id' => '36395512',
    'container.build_time' => 1730911953,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container2x75mkq');
