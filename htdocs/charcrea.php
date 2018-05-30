<?php

include_once 'header.php';
include_once '/includes/cdbh.inc.php';
include_once '/includes/dbh.inc.php';
include_once '/includes/charcrea.inc.php'

?>







    <section class="main-container">

        <div class="main-wrapper">

            <h2>Character Create</h2>

            <form class="signup-form" action="includes/charcrea.inc.php" method="POST">


                <input type="hidden" name="User_ID" value="$uid">


                First Name    :
                <input type="text" name="first" placeholder="Firstname">


                Last Name     :
                <input type="text" name="last" placeholder="Lastname">


                Strength      : <br>
                     1.2.3.4.5.6.7.8.9.10 <br>
                <br>
                <input type="range" name="str" placeholder="Strength" min="1" max="12" step="1">


                Endurance     :
                <input type="range" name="end" placeholder="Endurance" min="1" max="12" step="1">


                Agility       :
                <input type="range" name="agi" placeholder="Agility" min="1" max="12" step="1">


                Dexterity     :
                <input type="range" name="dex" placeholder="Dexterity" min="1" max="12" step="1">


                Technical     :
                <input type="range" name="tec" placeholder="Technical" min="1" max="12" step="1">


                Interlligence :
                <input type="range" name="int" placeholder="Intelligence" min="1" max="12" step="1">


                Willpower     :
                <input type="range" name="wil" placeholder="Willpower" min="1" max="12" step="1">


                Perception    :
                <input type="range" name="per" placeholder="Perception" min="1" max="12" step="1">


                Charisma      :
                <input type="range" name="cha" placeholder="Charisma" min="1" max="12" step="1">


                Magical       :
                <input type="range" name="mag" placeholder="Magical" min="1" max="12" step="1">


                <button type="submit" name="submit">Create</button>

            </form>

        </div>

    </section>
