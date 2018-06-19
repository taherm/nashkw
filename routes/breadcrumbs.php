<?php

// Home
Breadcrumbs::for('backend.home', function ($trail) {
    $trail->push('Home', route('backend.home'));
});

// Home > About
Breadcrumbs::for('backend.user.index', function ($trail, $element) {
    $trail->parent('backend.home');
    $trail->push('user', route('backend.user.index'));
});



// Home > Blog
Breadcrumbs::for('backend.product.index', function ($trail) {
    $trail->parent('backend.home');
    $trail->push('project', route('backend.product.index'));
});


Breadcrumbs::for('backend.tag.index', function ($trail) {
    $trail->parent('backend.home');
    $trail->push('tags', route('backend.tag.index'));
});

Breadcrumbs::for('backend.tag.create', function ($trail) {
    $trail->parent('backend.tag.index');
    $trail->push('create tag', route('backend.tag.create'));
});

Breadcrumbs::for('backend.tag.edit', function ($trail, $element) {
    $trail->parent('backend.tag.index');
    $trail->push('edit tag', route('backend.tag.edit', $element->id));
});


Breadcrumbs::for('backend.product.create', function ($trail) {
    $trail->parent('backend.product.index');
});



// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});