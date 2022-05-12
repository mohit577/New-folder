<!-- <style> -->
<!-- .try{
    color:yellow;
    background-color:red;

}
</style>
<body>
     -->
    <?php
//echo 'My';
//echo 'Name';
//echo 'is';
//echo 'Alok';


// $name = array(
//     'Alok',
//     'Amit',
//     'Anuj',
//     'Harsh',
//     'Mohit',
//     'Ashu',
//     'Someone'
// );

//var_dump($name);
//print_r($name);
//echo $name[0];

// $mix = array(
//     'name' => 'Alok',
//     'age' => '23',
//     'gender' => 'male'
// );

//var_dump($mix);

//print_r($mix);

//echo $mix['name'];

//Datatypes in php.

// $string = 'jslfjdf0938rh9fef8j';
// $integer = 23483947832;
// $float = 23.3434;
// $boolean = true;
// $array = array();
// $null = null;

// #concatination..

// $first_name = 'Monit';
// $last_name = 'Singh';

//echo $first_name.' '.$last_name;

#this is comment also.


/**
 * This function is being used to print the passed variable;
 *
 * @param $data - This is the value which will be printed.
 * @param $null - This will be a null value.
 * @return void
 */
// function PrintThisVar($data, $null) {
    //   echo $data;
    //   echo $null;
    // }
    
    // PrintThisVar('this is going to be printed', 'hello world');
    
    #loops
    
    #4 types of loop in php
    #1 = While
    #2 = For
    #3 = Foreach loop
    #4 Do while loop.
    
    
    // $status = false;
    
    // while ($status !== true) {
        //     echo 'after this value will become true';
        //     echo '<br>';
        //     $status = true;
        // }
        
        // $count = 10;
        
        // for ($num = 0; $num <= $count; $num++) {
            //     echo $num.'<br>';
            // }
            // $coun = 1;
            // do {
                //     echo 'this is happening'.'<br>';
                //     $coun++;
                // } while ($coun <= 5);

                
                // foreach ($name as $key=>$person) {
                    //     echo 'The '.$key.' of this person is '.$person.'<br>';
                    // }
                    
                    // $arrayAsso = array(
                        //     'users' => array(
                            //         'Alok',
                            //         'Anuj'
                            //     ),
                            //     'gender' => array(
                                //         'male',
                                //         'female'
                                //     ),
                                //     'address' => array(
//         'house' => array(
//             '223',
//             '342'
//         ),
//         'street' => array(
    //             '7',
    //             'shardanand colony',
    //         )
    //     )
    // );

// echo $arrayAsso['address']['street'][1];
// $data = json_encode($arrayAsso);

// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo $data; -->




// $int =100;
// for($j=1;$j<=100;$j++)
// echo '<br>'.$j;


// $i =0;
// while ($i <= 100) {
    //     echo $i.'<br>';
    //     $i++;
    // }
    // $i =0;
    // do 
    //    {
        //      echo $i.'<br>'; 
        //      $i++;
        //    } while ($i<= 100);
// $details = array(
    
    //     'name' =>'Mohit kumar singh',
    //     'age' => '21',
    //     'study' => 'BCA',
    //     'father' => 'shayamkant singh',
    
    
    // );
    // var_dump($details);
    // echo '<br>';
    
    
    // foreach ($details as $key => $member)
    //  {
        //   echo $key.'='.$membe/r,'<br>' ;    /
        //}
        
        // function data()
        // {
            //   $a=12;
            //   echo 'I am using a outside of function'.$a;
            
            // }
            // data();
            
            #USE OF GLOBALS FUNCTION
            
            // $a=15;
            // $b=50;
            // function data()
            // {
//   global$a,$b;

//   $GLOBALS['a']=$GLOBALS['a']+$GLOBALS['b'];

// }
// data();
// echo"Sum=$a";

// $a=5000;$b=10000;
// function data()
// {
    //     global$a,$b,$c;
    //     $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
    
// }
// data();
// echo "SUM=".$c;


// function data()
// {
    
    // $b=100;$c=200;$a;
    //     $a=$b+$c;
    //     echo 'SUM='.$a;
    // }
    // OUTPUT
    // SUM=300
    
    #USE OF STATIC , A++, AGAIN AGAIN CALL FUNCTION 
    
    
    // function test()
    // {
        //     static $a=12;
        //     echo $a;
        //     $a++;
        // }
        // test();
        // echo"<br>";
        // test();
        // echo"<br>";
        // test();
        // echo"<br>";
        // test();
        // echo"<br>";
        // test();
        // echo"<br>";test();
        
        // OUTPUT
        // 12
        // 13
        // 14
        // 15
        // 16
        // 17
        
        
       // </body>
        // echo "my ","Name ","is ","= ","MOHIT ","KUMAR ","SINGH ";
        // echo 'MY'.'NAME'.'IS';

        // $text1 ="Learn PHP";
        // $text2 ="MOHIT KUMAR SINGH";
        // $x = 3;
        // $y = 4;
        // print "<h2>".$text1."</h2>";
        // print "Study PHP ".$text2."<br>";
        // print $x + $y;
        // echo "<h2>".$text1."</h2>";
        // echo "Study PHP ".$text2."<br>";
        // echo $x + $y;



        $a ="HARD WORK IS A KEY TO SUCCESS";
        echo $a,"<br>";
        echo"Length =".strlen($a)."<br>";
        echo "Word count =".str_word_count($a),"<br>";
        echo "reverse =".strrev($a). "<br>";
        echo "Search Key =".strpos($a,"KEY")."<br>";
        echo "Replace =".str_replace("SUCCESS","SUCCESSFUL",$a);

       ?>
        
        

        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        



