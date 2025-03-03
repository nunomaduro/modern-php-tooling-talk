<?php

return;

it('may return a list of admins', function () {
    $response = $this->get(route('users.index', ['type' => 'admin']));

    $response->assertStatus(200)->assertExactJson([
        1, 2, 3,
    ]);
});

it('may return a list of customers', function () {
    $response = $this->get(route('users.index', ['type' => 'customer']));

    $response->assertStatus(200)->assertExactJson([
        4, 5, 6,
    ]);
});
