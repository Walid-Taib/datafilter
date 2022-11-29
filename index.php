<?php









$mot=$_POST['field-keywords'];
$auteur=$_POST['field-author'];
$titre=$_POST['field-title'];
$ISBN=$_POST['field-isbn'];
$editeur=$_POST['field-publisher'];
$collection=$_POST['field-collection'];
$rebrique=$_POST['node'];
$format=$_POST['field-binding_browse-bin'];
$dates=$_POST['field-dateop'];
$mois=$_POST['field-datemod'];
$annees=$_POST['field-dateyear'];
$sort=$_POST['sort'];

$time =$annees.'-0'.$mois.'-03';

$sorting="Titre";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($sort=="relevancerank"){
  


    if($dates=="before"){
        $sql = "SELECT * FROM books WHERE ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) < '$time'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo  $row["Date(time)"];

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
    if($dates=="After"){
        $sql = "SELECT *FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) > '$time'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {

            echo  $row["Date(time)"];

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
    else{
        $sql = "SELECT Date(time) FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."') ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {

            echo  $row["Date(time)"];

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
}

if($sort=="vente"){
    if($dates=="before"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) < '$time' ORDER BY Ventes";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
    if($dates=="After"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) > '$time' ORDER BY Ventes";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }

}

if($sort=="+price"){
    if($dates=="before"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) < '$time' ORDER BY Prix";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
    if($dates=="After"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) > '$time' ORDER BY Prix";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }

}

if($sort=="-price"){
    if($dates=="before"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) < '$time' ORDER BY Prix DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
    if($dates=="After"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) > '$time' ORDER BY Prix DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }

}


if($sort=="commentaire"){
    if($dates=="before"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) < '$time' ORDER BY MDC ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
    if($dates=="After"){
        $sql = "SELECT * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) > '$time' ORDER BY MDC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }

}



if($sort=="date"){
    if($dates=="before"){
        $sql = "SELECT  * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) < '$time' ORDER BY  DATE(time) ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }
    if($dates=="After"){
        $sql = "SELECT  * FROM books WHERE  ( mot LIKE '%".$mot."%' OR Auteur='".$auteur."' OR Titre='".$titre."' OR ISBN='".$ISBN."'  OR Editeur='".$editeur."'  OR Collection='".$collection."'  OR Rubrique='".$rebrique."' OR format='".$format."')  AND   DATE(time) > '$time' ORDER BY  DATE(time)";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "titre : ";
            echo  $row["Titre"];
            echo "           ///////                  Auteur : ";
            echo  $row["Auteur"];
            
            echo  $row["ISBN"];
            echo "           ///////                  ISBN : ";
            echo  $row["Editeur"];
            echo "Editeur : ";
            echo  $row["Collection"];
            echo "<br></br>";

          }
        } else {
          echo "0 results";
        }
        $conn->close();
    }

}














?>