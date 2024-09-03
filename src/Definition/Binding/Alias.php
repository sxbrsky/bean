<?php

/*
 * This file is part of the sxbrsky/dependency-injection.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Sxbrsky\DependencyInjection\Definition\Binding;

use Sxbrsky\DependencyInjection\Definition\Definition;

final readonly class Alias implements Definition
{
    public function __construct(
        public string $value,
        public bool $shared = false
    ) {
    }
}
