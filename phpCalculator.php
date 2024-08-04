<!DOCTYPE html>
<html lang="en">
<head>
    <title>BMI Calculator</title>
    <style>
        td{
            padding : 10px;
        }
    </style>
</head>
<body>
    <?php

        if(isset($_POST['submit'])){
            echo $_POST;
        }

    ?>
    <fieldset style="width:350px"><legend><h2> BMI Calculator</h2></legend>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <table>
                <tr>
                    <td><lable>Name   </lable></td>
                    <td><input type="text" id="name" name="name" placeholder = "Enter your name"></td>
                </tr>
                <tr>
                    <td> <lable>Gender </lable></td>
                    <td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female</td>
                </tr>
                <tr>
                    <td><labal>Heigth (m) </labal></td>
                    <td><input type="text" id="height" name="height" placeholder = "Enter your height"></td>
                </tr>
                <tr>
                    <td><lable>Weight (kg)  </lable></td>
                    <td><input type="text" id="weight" name="weight" placeholder = "Enter your weight"></td>
                </tr>
            </table>

            <br><br>

            <center><input type="submit" value="Calculate"></center>

        </form>

    </fieldset>
    

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $name = htmlspecialchars ($_POST["name"]);
            $gender = ($_POST["gender"]);
            $height = ($_POST["height"]);
            $weight = ($_POST["weight"]);
            
        }

        function calculation ($height,$weight){

            $bmiValue = $weight/$height ;
            echo $bmiValue;

        }

        echo "<br><lable> Name :</lable>";
        echo $name;
        echo "<br><lable>Gender :</lable>";
        echo $gender;
        echo "<br><lable> Height :</lable>";
        echo $height;
        echo "<br><lable> Weight :</lable>";
        echo $weight;
        echo "<br><lable> BMI value :</lable>";
        calculation($height, $weight);
        echo "<br><br>";
        

        function bmiRange($height, $weight){
            $bmiValue = $weight/$height;

            echo "You are in ";

            if($bmiValue >= 35){
                echo "<i>obesity class II</i>";
            }else if($bmiValue>=30 && $bmiValue<35){
                echo"<i>obesity class I</i>";
            }else if($bmiValue >=25 && $bmiValue<30){
                echo "<i>overweight</i>";
            }else{
                echo "<i>normal weight</i>";
            }

        }

        bmiRange($height, $weight);
     
    ?>

</body>
</html>