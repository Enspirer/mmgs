<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.projects.index', function ($trail) {
    $trail->push('Projects', route('admin.projects.index'));
});

Breadcrumbs::for('admin.project.create', function ($trail) {
    $trail->push('Projects Create', route('admin.project.create'));
});

Breadcrumbs::for('admin.projects.edit', function ($trail) {
    $trail->push('Projects Edit', route('admin.projects.edit',1));
});

Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.gallery.index', function ($trail) {
    $trail->push('Gallery', route('admin.gallery.index'));
});



require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
