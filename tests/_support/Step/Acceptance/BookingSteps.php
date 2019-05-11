<?php
namespace Step\Acceptance;
use Page\Acceptance\StartPage;
use Page\Acceptance\SortPage;
use Page\Acceptance\BookingPage;
class BookingSteps extends \AcceptanceTester
{
    /**
     * @param $tableID
     * @param $numOfPerson
     * @param $date
     * @param $description
     * @param $starTime
     * @throws \Exception
     */
    public function doBooking($tableID, $numOfPerson, $date, $description, $starTime)
    {
        $I = $this;
        $I -> fillField(BookingPage::$tableID, $tableID);
        $I -> fillField(BookingPage::$numOfPerson, $numOfPerson);
        $I -> fillField(BookingPage::$date, $date);
        $I -> fillField(BookingPage::$description, $description);
        $I -> fillField(BookingPage::$startTime, $starTime);
    }
    public function checkClear()
    {
        $I = $this;
        $I -> click(BookingPage::$clear);
    }
    public function doAdd()
    {
        $I = $this;
        $I -> click(BookingPage::$addButton);
    }

}