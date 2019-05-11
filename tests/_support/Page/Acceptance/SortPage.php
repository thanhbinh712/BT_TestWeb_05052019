<?php
namespace Page\Acceptance;

class SortPage
{
    // include url of current page
    /**
     * @var string
     */
    public static $ID = '((//th[@class="id t-first"])/a)[1]';
    /**
     * @var string
     */
    public static $type = '((//th[@class="type t-last"])/a)[1]';
    /**
     * @var string
     */
    public static $tableID = '((//th[@class="tableID t-first"])/a)[1]';
    /**
     * @var string
     */
    public static $noOfPerson = '((//th[@class="numberofperson"])/a)[1]';
    /**
     * @var string
     */
    public static $date = '((//th[@class="date"])/a)[1]';
    /**
     * @var string
     */
    public static $description = '((//th[@class="description"])/a)[1]';
    /**
     * @var string
     */
    public static $duration = '((//th[@class="duration"])/a)[1]';
    /**
     * @var string
     */
    public static $startTime = '((//th[@class="startTime"])/a)[1]';
    /**
     * @var string
     */
    public static $delete = '(//a[text()="Delete"])[2]';
    /**
     * @var string
     */
    public static $edit = '(//a[text()="Edit"])[2]';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */

}
