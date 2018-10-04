<!DOCTYPE html>
<html>
	<head>
        <table width="300px" cellspacing="0px" cellpadding="1px" border="1px">
	</head>

	<body>
    <?php
          echo "Question 1: ";
          function isBitten(){
            $p = rand(0,1);
                if($p==0){
                     return true;
                 }
             return false;
          }
           if(isBitten()==0){
                echo "Charlie did not eat my lunch";
           }else{
                echo "Charlie ate my lunch";
           }
           echo "<br>";

            for($row=1;$row<=8;$row++)
                  {
                      echo "<tr>";
                      for($col=1;$col<=8;$col++)
                      {
                      $total=$row+$col;
                      if($total%2==0)
                      {
                      echo "<td height=35px width=35px bgcolor=red></td>";
                      }
                      else
                      {
                      echo "<td height=35px width=35px bgcolor=#000000></td>";
                      }
                      }
                      echo "</tr>";
                }
                echo "<br>";
                echo "<br>";
                echo "Question 3 with for loop:  ";
                $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July',
                'August','September', 'October', 'November', 'December');
                echo "<br>";
              for($x=0;$x<sizeof($month);$x++)
                echo " ".$month[$x];
            sort($month);
            echo "<br>";
            echo " After sorting: ";
            $counter=0;
                for($x=0;$x<sizeof($month);$x++){
                if($counter==0){
                    echo " ".$month[$x];
                         $counter++;
                }else{
                echo ", ".$month[$x];
                }
        }
            $counter = 0;
            echo "<br>";
            echo "<br>";
            echo "Question 3 with for loopeach loop: ";
            $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July',
            'August','September', 'October', 'November', 'December');
            echo "<br>";
            foreach ($month as $x){
                if($counter==0){
                    echo " ".$x;
                }else{
                echo ", ".$x;
            }
            }
            sort($month);
            $counter=0;
            echo "<br>";
             foreach ($month as $x){
                if($counter==0){
                    echo " ".$x;
                    $counter++;
                }else{
                echo ", ".$x;
            }
            }
            echo "<br>";
            echo "<br>";
            echo "Question 4: ";
            echo "<br>";
            $restaurants = array("Chama Gaucha"=>40.50,"Aviva by Kameel"=>15.00,"Bone’s Restaurant"=>65.00,"Umi Sushi Buckhead"=>40.50,"Fandangles"=>30.00, "Canoe"=>35.50,"One Flew South"=>21.00,"Fox Bros. BBQ"=>15.00,"South City Kitchen Midtown"=>29.00);

            foreach($restaurants as $x => $x_value){
                echo "Resturant = ".$x.", Average Cost = ".$x_value;
                echo "<br>";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";
            OrderByPrice($restaurants);
            OrderByName($restaurants);


            function OrderByPrice($restaurants){
                echo "Sort by Restaurant's Price: ";
                asort($restaurants);
                foreach($restaurants as $x => $x_value){
                echo "Resturant = ".$x.", Average Cost = "." $".$x_value;
                echo "<br>";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";
        }

            function OrderByName($restaurants){
                echo "Sort by Restaurant's Name: ";
                ksort($restaurants);
                foreach($restaurants as $x => $x_value){
                echo "Resturant = ".$x.", Average Cost = "." $".$x_value;
                echo "<br>";
            }
        }
            echo "<br>";
            echo "<br>";
            echo "<br>";
        echo "Question 2: ";
     ?>
	</body>
</html>
hw3
