<?php


/*
 * UserGroupRepositoryInterface.php
 * Copyright (c) 2023 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Repositories\UserGroup;

use FireflyIII\Models\UserGroup;
use FireflyIII\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;

/**
 * Interface UserGroupRepositoryInterface
 */
interface UserGroupRepositoryInterface
{
    /**
     * @param UserGroup $userGroup
     *
     * @return void
     */
    public function destroy(UserGroup $userGroup): void;

    /**
     * @return Collection
     */
    public function get(): Collection;

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param User|Authenticatable|null $user
     *
     * @return void
     */
    public function setUser(User | Authenticatable | null $user): void;

    /**
     * @param array $data
     *
     * @return UserGroup
     */
    public function store(array $data): UserGroup;

    /**
     * @param UserGroup $userGroup
     * @param array     $data
     *
     * @return UserGroup
     */
    public function update(UserGroup $userGroup, array $data): UserGroup;

    /**
     * @param UserGroup $userGroup
     * @param array     $data
     *
     * @return UserGroup
     */
    public function updateMembership(UserGroup $userGroup, array $data): UserGroup;
}
