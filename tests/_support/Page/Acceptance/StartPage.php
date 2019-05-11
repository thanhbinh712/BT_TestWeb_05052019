<?php
namespace Page\Acceptance;

class StartPage
{
    // include url of current page
    public static $URL = '/QATest';
    /**
     * @var string
     */
    public static $newReservation = '//a[text()="New Reservation"]';
    /**
     * @var string
     */
    public static $reloadData = '//a[text()="Reload Data"]';
    /**
     * @var string
     */
    public static $goToPage1 = '//a[@title="Go to page 1"]';
    /**
     * @var string
     */
    public static $goToPage2 = '//a[@title="Go to page 2"]';


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
