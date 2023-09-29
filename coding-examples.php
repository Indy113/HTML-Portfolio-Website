    <?php 
      include("inc\navigation.php");
    ?>
    <body>
      <div class="mainContent">
        <h2>Table name: "actor"</h2>
        <img class="databaseExample" src="images\the.png" alt="Database table example 1">
        <div>
          <h3>SELECT * FROM actor WHERE act_id = (SELECT act_id FROM movie_cast WHERE name = 'Harrison Ford');</h3>
          <p>
            The use of this query would be to retrieve act_id's that relate to Harrison Ford to see what
            movies he has been in.

            This query would return all columns (*) from the table "actor" if they meet the requirement
            of containing the same "act_id" as 'Harrison Ford' in the table "movie_cast"
          </p>
        </div><br>
        <h2>Table name: "movie_cast"</h2>
        <img class="databaseExample" src="images\the 2.png" alt="Database table example 2">
        <div>
          <h3>SELECT role FROM movie_cast WHERE mov_id = 903;</h3>
          <p>
            The use of this query would be to see the role that corresponds to the mov_id of 903.

            This query would return the (role) column from the table "movie_cast" if they meet the requirement
            of having a "mov_id" of 903
          </p>
        </div><br>
        <h2>Table name: "movie"</h2>
        <img class="databaseExample" src="images\the 3.png" alt="Database table example 3">
        <div>
          <h3>SELECT * FROM movie WHERE mov_dt_rel BETWEEN 1950 AND 1955;</h3>
          <p>
            The use of this querty would be to see what and how many films in the database were released
            between 1950 and 1955.

            This query would return all columns (*) from the table "movie" if they meet the requirement
            of being released between 1950 and 1955
          </p>
        </div>
      </div>
  </body>
</html>