<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push(__('dashboard.title'), route('dashboard'));
});

// Home > User
Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('user.breadcrumb.index'), route('users.index'));
});

Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users.index');
    $trail->push(__('user.breadcrumb.create'), route('users.create'));
});

Breadcrumbs::for('users.edit', function ($trail) {
    $trail->parent('users.index');
    $trail->push(__('user.breadcrumb.edit'), route('users.edit', '$user->id'));
});

Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('user.profile'), route('profile'));
});





// Home > Role
Breadcrumbs::for('roles.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('role.breadcrumb.index'), route('roles.index'));
});

Breadcrumbs::for('roles.create', function ($trail) {
    $trail->parent('roles.index');
    $trail->push(__('role.breadcrumb.create'), route('roles.create'));
});

Breadcrumbs::for('roles.edit', function ($trail) {
    $trail->parent('roles.index');
    $trail->push(__('role.breadcrumb.edit'), route('roles.edit', '$role->id'));
});





// Home > Permission
Breadcrumbs::for('permissions.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('permission.breadcrumb.index'), route('permissions.index'));
});

Breadcrumbs::for('permissions.create', function ($trail) {
    $trail->parent('permissions.index');
    $trail->push(__('permission.breadcrumb.create'), route('permissions.create'));
});

Breadcrumbs::for('permissions.edit', function ($trail) {
    $trail->parent('permissions.index');
    $trail->push(__('permission.breadcrumb.edit'), route('permissions.edit', '$permission->id'));
});





// Home > File Manager
Breadcrumbs::for('filemanager.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('filemanager.breadcrumb.index'), route('filemanager.index'));
});








// Home > Article
Breadcrumbs::for('articles.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('article.breadcrumb.index'), route('articles.index'));
});

Breadcrumbs::for('articles.create', function ($trail) {
    $trail->parent('articles.index');
    $trail->push(__('article.breadcrumb.create'), route('articles.create'));
});

Breadcrumbs::for('articles.edit', function ($trail) {
    $trail->parent('articles.index');
    $trail->push(__('article.breadcrumb.edit'), route('articles.edit', '$article->id'));
});



// Home > Article Category
Breadcrumbs::for('articlecategories.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('articlecategory.breadcrumb.index'), route('articlecategories.index'));
});

Breadcrumbs::for('articlecategories.create', function ($trail) {
    $trail->parent('articlecategories.index');
    $trail->push(__('articlecategory.breadcrumb.create'), route('articlecategories.create'));
});

Breadcrumbs::for('articlecategories.edit', function ($trail) {
    $trail->parent('articlecategories.index');
    $trail->push(__('articlecategory.breadcrumb.edit'), route('articlecategories.edit', '$articlecategory->id'));
});
