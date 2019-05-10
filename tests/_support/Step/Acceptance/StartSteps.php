<?php
namespace Step\Acceptance;
use Page\Acceptance\StartPage;
class StartSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public function newReservation()
    {
        $I = $this;
        $I -> amOnPage(StartPage::$URL);
        $I -> waitForElementVisible(StartPage::$newReservation, 30);
        $I -> click(StartPage::$newReservation);
    }

    /**
     * @throws \Exception
     */
    public function reloadData()
    {
        $I = $this;
        $I -> amOnPage(StartPage::$URL);
        $I -> waitForElementVisible(StartPage::$reloadData, 30);
        $I -> click(StartPage::$reloadData);
    }

    /**
     * @throws \Exception
     */
    public function goToPage1()
    {
        $I = $this;
        $I -> amOnPage(StartPage::$URL);
        $I -> waitForElementVisible(StartPage::$goToPage1, 30);
        $I -> click(StartPage::$goToPage1);
    }

    /**
     * @throws \Exception
     */
    public function goToPage2()
    {
        $I = $this;
        $I -> amOnPage(StartPage::$URL);
        $I -> waitForElementVisible(StartPage::$goToPage2, 30);
        $I -> click(StartPage::$goToPage2);
    }
}