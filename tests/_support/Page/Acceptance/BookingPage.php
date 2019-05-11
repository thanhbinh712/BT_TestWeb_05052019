<?php
namespace Page\Acceptance;

class BookingPage
{
    // include url of current page
    /**
     * @var string
     */
    public static $URL = '/reservationform';
    /**
     * @var string
     */
    public static $tableID = '//input[@name="tableID"]';
    /**
     * @var string
     */
    public static $numOfPerson = '//input[@name="numberofperson"]';
    /**
     * @var string
     */
    public static $date = '//input[@name="date"]';
    /**
     * @var string
     */
    public static $description = '//textarea[@name="description"]';
    /**
     * @var string
     */
    public static $startTime = '//input[@name="startTime"]';
    /**
     * @var string
     */
    public static $addButton = '//input[@value="add/edit"]';
    /**
     * @var string
     */
    public static $clear = '//a[text()="clear"]';
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
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
