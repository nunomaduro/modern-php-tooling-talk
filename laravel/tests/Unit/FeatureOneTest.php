<?php

test('sleeps for 2 seconds', function () {
    sleep(2);

    expect(true)->toBeTrue();
});
