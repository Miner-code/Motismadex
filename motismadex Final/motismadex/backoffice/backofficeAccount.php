<?php
   if(isset($_SESSION['role']))
   {
        $role = $_SESSION['role'];
        if($role == 0)
        {          
            header("Location: ../portail/connexion.php");   
        }
   }
  
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="../script/jquery-3.5.1.min.js"></script>
	<script src="backofficeAccountScript.js"></script>

    <link rel="stylesheet" href="backoffice.css">
    <title>Back Office</title>
</head>
<body>
 <h1>Back Office</h1>
 <nav>
	<ul>
		<li><a href="backofficeAccount.php">Account</a></li>
		<li><a href="backofficeFights.php">Fights</a></li>
        <li><a href="../passedress.php">Exit</a></li>
	</ul>
 </nav>
	<div class="blockpage">
		<table id="accountListGreen">
			<tr>
				<th>Compte</th>
				<th>Dresseur</th>
				<th>Bannir</th>
			</tr>

           <?php
               require '../inc/con_bdd.php';
               require '../inc/function.php';
               

                if(isset($_GET['bannedId']))
                { 
                     $bannedId = $_GET['bannedId'];
                     
                     $sqlBanned = "SELECT is_banned FROM account WHERE id = $bannedId ";
                     $resultBanned = mysqli_query($conn, $sqlBanned);
                     $row = mysqli_fetch_assoc($resultBanned);
                 
                     if ($resultBanned) {
                         // Inverser la valeur de hide
                         if ($row['is_banned'] == 0) {
                             $newBanValue = 1;
                         } else {
                             $newBanValue = 0;
                         }
                        
                         // Mettre à jour la valeur de hide dans la base de données
                         $updateSql = "UPDATE account SET is_banned = $newBanValue WHERE id = $bannedId";
                         $updateResult = mysqli_query($conn, $updateSql);
                 
                     } 
                 }

                    $sql = "SELECT * FROM account ";
					$result = mysqli_query($conn, $sql);
					// Afficher les combats
					if ($result && mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							// Vérifier si le combat est masqué
								$idDresseurAutorCombat = $row["id"];
								$sqlNameDresseur = "SELECT * FROM dresseur WHERE num_account = $idDresseurAutorCombat ";
									$resultNameDresseur = mysqli_query($conn, $sqlNameDresseur);
									$rowNameDresseur = mysqli_fetch_assoc($resultNameDresseur);
                                    $hidenBanCss =  "banned".$row["is_banned"];				
			?>

            <tr class="accountItemGreen <?php echo $hidenBanCss;?>">
				<td><a><?php echo $row["name_account"]; echo $row["firstname_account"]; ?></a></td>
				<td><a><?php echo $rowNameDresseur["name_dresseur"];?></a></td>
				<td>
                    <?php 
                        if(!$row["is_banned"])
                        {
                     ?>
					<button class="banButton" id="<?php echo $row["id"];?>">Bannir</button>
                    <?php 
                        }
                        else
                        {
                     ?>
					<button class="banButton" id="<?php echo $row["id"];?>">Débannir</button>
                    <?php  
                        }
                     ?>
				</td>
               
				
			</tr>
            <?php 
                        }
                    }
            ?>
		</table>
	</div>
</body>
</html>