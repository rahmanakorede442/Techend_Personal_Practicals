
<div class="row justify-content-center ">
        <form action="process.php" method="post">

        <!-- text inputs start here-->
        <div class="form-group">
             <input class="form-control" type="text" name="lastname" placeholder="lastname">
        </div>
        <div class="form-group">     
            <input class="form-control" type="text" name="middlename" placeholder="middlename">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="firstname" placeholder="firstname">
        </div>
        <!--text input end here-->


        <!--radio buttons for gender starts here-->
        <div class="radio">
            <label>
                 <input type="radio" name="gender" value="male"> Male
            </label>
        </div>
        <div class="radio">
            <label>
                 <input type="radio" name="gender" value="female"> Female
            </label>
        </div>
        <div class="radio">
            <label>
                 <input type="radio" name="gender" value="other"> Other
            </label>
        </div>
        <!--radio buttons for gender ends here-->


        <!--select-options for age start here--> 
        <div class="form-group">
            <select class="form-control" name="age" id="">
            <option selected> Age</option>
            <option value="0-2">Age 0-2</option>
            <option value="2-4">Age 2-4</option>
            <option value="4-6">Age 4-6</option>
            <option value="6-8">Age 6-8</option>
            <option value="8-10">Age 8-10</option>
            <option value="10-12">Age 10-12</option>
            <option value="12-14">Age 12-14</option>
            <option value="overage">Age 14-&infin;</option>
            </select>
        </div>
        <!--select-options for age end here-->


        <!-- the register button starts here-->
        <div class="form-group">
            <button class="form-control btn btn-primary" type="submit" name="submit">Register</button>
        </div>
        <!-- the register button end here-->
       

        </form>
    </div>