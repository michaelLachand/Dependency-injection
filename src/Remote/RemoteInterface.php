<?php

namespace App\Remote;

interface RemoteInterface
{
    public function press(string $name): void;

    /**
     * @return string[]
     */
    public function buttons(): iterable;
}