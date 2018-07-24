<?php 
    Class Student
    {

        public $Fname;
        public $Lname;
        public $NameWithInitials;
        public $NIC;
        public $Address;
        public $Phone;
        public $Uni;
        public $StudentNo;
        public $Faculty;

        public function __construct(/*$Fname, $Lname, $NameWithInitials,$NIC,$Address,$Phone,$Uni,$StudentNo,$Faculty*/)
        {
          /*$this->Fname = $Fname;
            $this->Lname = $Lname;
            $this->NameWithInitials = $NameWithInitials;
            $this->NIC = $NIC;
            $this->Address = $Address;
            $this->Phone = $Phone;
            $this->Uni = $Uni;
            $this->StudentNo = $StudentNo;
            $this->Faculty = $Faculty;*/
        }

        function read_data($studentNo){
            echo "read_data data not availabe :P";
        }

        function create_student($Fname,$Lname,$NameWithInitials,$NIC,$Address,$Phone,$Uni,$StudentNo,$Faculty){
            echo "create_student data not availabe :P";
        }

        function update_student(){
            echo "update_student data not availabe :P";
        }

        function delete_student(){
            echo "delete_student data not availabe :P";
        }
    }
?>