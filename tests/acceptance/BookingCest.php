<?php 
use Step\Acceptance\BookingSteps;
use Step\Acceptance\StartSteps;
use Step\Acceptance\SortSteps;
class BookingCest
{
    /**
     * @var
     */
    protected $tableID;
    /**
     * @var
     */
    protected $emptyID;
    /**
     * @var string
     */
    protected $numOfPerson;
    /**
     * @var
     */
    protected $emptyNum;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var
     */
    protected $startTime;
    /**
     * @var
     */
    protected $emptyTime;
    /**
     * @var string
     */
    protected $invalidTime;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $emptyDescription;

    /**
     * SortCest constructor.
     */
    public function __construct()
    {
        $this -> tableID = '7';
        $this -> emptyID = '';
        $this -> numOfPerson = '3';
        $this -> emptyNum = '';
        $this -> date = '10/06/2019';
        $this -> startTime = '19';
        $this -> emptyTime = '';
        $this -> invalidTime = '14';
        $this -> description = 'New booking';
        $this -> emptyDescription = '';
    }



    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */

    public function createBooking(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking( $this->tableID, $this->numOfPerson, $this->date, $this->description, $this->startTime);
        $I -> doAdd();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createWithoutID(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking without table ID');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->emptyID, $this->numOfPerson, $this->date,  $this->description, $this->startTime);
        $I -> doAdd();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createWithoutNumberOfPerson(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking without number of person');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->tableID, $this->emptyNum, $this->date, $this->description, $this->startTime);
        $I -> doAdd();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createWithoutDescription(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking without Description');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->tableID, $this->numOfPerson, $this->date, $this->emptyDescription, $this->startTime);
        $I -> doAdd();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createWithoutStartTime(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking without StartTime');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->tableID, $this->numOfPerson, $this->date, $this->description, $this->emptyTime);
        $I -> doAdd();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createWithInvalidTime(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking with invalid time');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->tableID, $this->numOfPerson, $this->date, $this->description, $this->invalidTime);
        $I -> doAdd();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function clearData(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to fill Input and clear');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->tableID, $this->numOfPerson, $this->date, $this->description, $this->invalidTime);
        $I -> checkClear();
    }
}
