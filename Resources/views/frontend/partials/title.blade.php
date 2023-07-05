@php
    $hash = sha1($titleComponentNamespace);
    if (isset($component)) {
    $__componentOriginal{$hash} = $component;
    }
    $component = $__env->getContainer()->make($titleComponentNamespace, array_merge([],$titleComponentAttributes ?? []));
    $component->withName($titleComponent);
    if ($component->shouldRender()):
    $__env->startComponent($component->resolveView(), $component->data());
    if (isset($__componentOriginal{$hash})):
    $component = $__componentOriginal{$hash};
    unset($__componentOriginal{$hash});
    endif;
    echo $__env->renderComponent();
    endif;
@endphp