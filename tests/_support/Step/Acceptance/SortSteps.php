<?php
namespace Step\Acceptance;
use Page\Acceptance\StartPage;
use Page\Acceptance\SortPage;
use Page\Acceptance\BookingPage;
class SortSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public function doIDSort()
    {
        $I = $this;
        $I->amOnPage(StartPage::$URL);
        $I->waitForElementVisible(SortPage::$ID, 30);
        $I->click(SortPage::$ID);
    }

    /**
     * @throws \Exception
     */
    public function doTypeSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$type);
        $I->click(SortPage::$type);
    }

    /**
     * @throws \Exception
     */
    public function doDescriptionSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$description);
        $I->click(SortPage::$description);
    }

    /**
     * @throws \Exception
     */
    public function doDateSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$date);
        $I->click(SortPage::$date);
    }

    /**
     * @throws \Exception
     */
    public function doTableIDSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$tableID);
        $I->click(SortPage::$tableID);
    }

    /**
     * @throws \Exception
     */
    public function doNumOfPersonSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$noOfPerson);
        $I->click(SortPage::$noOfPerson);
    }

    /**
     * @throws \Exception
     */
    public function doStartTimeSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$startTime);
        $I->click(SortPage::$startTime);
    }

    /**
     * @throws \Exception
     */
    public function doDurationSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$duration);
        $I->click(SortPage::$duration);
    }

    /**
     * @throws \Exception
     */
    public function doDelete()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$delete);
        $I->click(SortPage::$delete);
    }

    /**
     * @throws \Exception
     */
    public function clickEdit()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$edit);
        $I->click(SortPage::$edit);
    }

    /**
     * @param $tableID
     * @param $numOfPerson
     * @param $date
     * @param $description
     * @param $starTime
     * @throws \Exception
     */
    public function doEdit($tableID, $numOfPerson, $date, $description, $starTime)
    {
        $I = $this;
        $I -> clickEdit();
        $I -> fillField(BookingPage::$tableID, $tableID);
        $I -> fillField(BookingPage::$numOfPerson, $numOfPerson);
        $I -> fillField(BookingPage::$date, $date);
        $I -> fillField(BookingPage::$description, $description);
        $I -> fillField(BookingPage::$startTime, $starTime);
        $I -> click(BookingPage::$addButton);
    }
}