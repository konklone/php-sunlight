<?php
/**
 * UpcomingBills.php - Congress API Wrapper
 *
 * The API Wrapper provides an interface to construct Sunlight Foundation Congress API queries.
 *
 * @link           http://sunlightlabs.github.io/congress/upcoming_bills.html
 *
 * @author         Samantha Quinones <samantha@tembies.com>
 * @package        Sunlight\Congress
 * @copyright      2013 Samantha Quinones
 * @license        MIT (For the full copyright and license information, please view the LICENSE
 *                 file that was distributed with this source code.)
 */

namespace Sunlight\Congress;


use Sunlight\Congress\Api\ApiWrapper;

/**
 * @link    http://sunlightlabs.github.io/congress/upcoming_bills.html
 * @author  Samantha Quinones <samantha@tembies.com>
 * @package Sunlight\Congress
 */
class UpcomingBills extends ApiWrapper
{
    /**
     * @var string
     */
    protected $url = "http://congress.api.sunlightfoundation.com/upcoming_bills";
}