<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the application returns a successful response', function () {
    $response = $this->get('/');

    expect($response->status())->toBe(200);
});
