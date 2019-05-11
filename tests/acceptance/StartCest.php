<?php
use Step\Acceptance\SortSteps;
use Step\Acceptance\StartSteps;
use Step\Acceptance\BookingSteps;
class StartCest
{
    /**
     * @var
     */
    protected $tableID;
    /**
     * @var
     */
    protected $numOfPerson;
    /**
     * @var
     */
    protected $date;
    /**
     * @var
     */
    protected $startTime;
    /**
     * @var
     */
    protected $description;

    /**
     * SortCest constructor.
     */
    public function __construct()
    {
        $this -> tableID = '7';
        $this -> numOfPerson = '2';
        $this -> date = '10/05/2019';
        $this -> startTime = '17';
        $this -> description = 'New booking';
    }

    /**
     * @param SortSteps $I
     * @throws Exception
     */
    public function doSort(SortSteps $I)
    {
        $I -> wantToTest('I want to click sort all column');
        $I -> doIDSort();
        $I -> doTypesort();
        $I -> doTableIDSort();
        $I -> doNumOfPersonSort();
        $I -> doDateSort();
        $I -> doDescriptionSort();
        $I -> doDurationSort();
        $I -> doStartTimeSort();
        $I -> doDelete();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function doEdit(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to edit booking');
        $I = new SortSteps($scenario);
        $I -> doEdit($this->tableID, $this->numOfPerson, $this->date, $this->description, $this->startTime);
    }

    /**
     * @param StartSteps $I
     * @throws Exception
     */
    public function checkReloadData(StartSteps $I)
    {
        $I -> wantToTest('I want to Reload Data success');
        $I -> reloadData();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function doDelete(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to delete a booking');
        $I = new SortSteps($scenario);
        $I -> doDelete();
    }

    /**
     * @param StartSteps $I
     * @throws Exception
     */
    public function changePage(StartSteps $I)
    {
        $I -> wantToTest('I want to go to page 2 and return page 1');
        $I -> goToPage2();
        $I -> goToPage1();
    }

}