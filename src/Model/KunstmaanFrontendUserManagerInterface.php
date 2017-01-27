<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webtown\KunstmaanFrontendUserBundle\Model;

use Webtown\KunstmaanFrontendUserBundle\Entity\KunstmaanFrontendUserInterface;

/**
 * Interface to be implemented by user managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to users should happen through this interface.
 *
 * The class also contains ACL annotations which will only work if you have the
 * SecurityExtraBundle installed, otherwise they will simply be ignored.
 *
 * @author Gordon Franke <info@nevalon.de>
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface KunstmaanFrontendUserManagerInterface
{
    /**
     * Creates an empty user instance.
     *
     * @return KunstmaanFrontendUserInterface
     */
    public function createUser();

    /**
     * Deletes a user.
     *
     * @param KunstmaanFrontendUserInterface $user
     */
    public function deleteUser(KunstmaanFrontendUserInterface $user);

    /**
     * Finds one user by the given criteria.
     *
     * @param array $criteria
     *
     * @return KunstmaanFrontendUserInterface
     */
    public function findUserBy(array $criteria);

    /**
     * Find a user by its username.
     *
     * @param string $username
     *
     * @return KunstmaanFrontendUserInterface or null if user does not exist
     */
    public function findUserByUsername($username);

    /**
     * Finds a user by its email.
     *
     * @param string $email
     *
     * @return KunstmaanFrontendUserInterface or null if user does not exist
     */
    public function findUserByEmail($email);

    /**
     * Finds a user by its username or email.
     *
     * @param string $usernameOrEmail
     *
     * @return KunstmaanFrontendUserInterface or null if user does not exist
     */
    public function findUserByUsernameOrEmail($usernameOrEmail);

    /**
     * Finds a user by its confirmationToken.
     *
     * @param string $token
     *
     * @return KunstmaanFrontendUserInterface or null if user does not exist
     */
    public function findUserByConfirmationToken($token);

    /**
     * Returns a collection with all user instances.
     *
     * @return \Traversable
     */
    public function findUsers();

    /**
     * Returns the user's fully qualified class name.
     *
     * @return string
     */
    public function getClass();

    /**
     * Reloads a user.
     *
     * @param KunstmaanFrontendUserInterface $user
     */
    public function reloadUser(KunstmaanFrontendUserInterface $user);

    /**
     * Updates a user.
     *
     * @param KunstmaanFrontendUserInterface $user
     */
    public function updateUser(KunstmaanFrontendUserInterface $user);

    /**
     * Updates a user password if a plain password is set.
     *
     * @param KunstmaanFrontendUserInterface $user
     */
    public function updatePassword(KunstmaanFrontendUserInterface $user);
}
