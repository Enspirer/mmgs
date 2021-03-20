<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.projects.index', function ($trail) {
    $trail->push('Projects', route('admin.projects.index'));
});

Breadcrumbs::for('admin.projects.create', function ($trail) {
    $trail->push('Projects Create', route('admin.projects.create'));
});

Breadcrumbs::for('admin.projects.edit', function ($trail) {
    $trail->push('Projects Edit', route('admin.projects.edit',1));
});




require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
