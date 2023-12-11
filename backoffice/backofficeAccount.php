
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
    <!-- Script -->
    <script src="../script/jquery-3.5.1.min.js"></script>
	<script src="backofficeAccountScript.js"></script>
    <!--  -->
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
				<th>Masquer</th>
			</tr>

           <?php
               require '../inc/con_bdd.php';
               require '../inc/function.php';
               if(isset($_GET['hidenId']))
               { 
                    $hidenId = $_GET['hidenId'];
                    
                    $sqlHidden = "SELECT dresseur FROM combat WHERE id = $hidenId ";
                    $resultHidden = mysqli_query($conn, $sqlHidden);
                    $row = mysqli_fetch_assoc($resultHidden);
                
                    if ($resultHidden) {
                        // Inverser la valeur de hide
                        if ($row['hide'] == 0) {
                            $newHideValue = 1;
                        } else {
                            $newHideValue = 0;
                        }
                       
                        // Mettre à jour la valeur de hide dans la base de données
                        $updateSql = "UPDATE dresseur SET hide = $newHideValue WHERE id = $hidenId";
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
								$sqlNameDresseur = "SELECT * FROM dresseur WHERE id = $idDresseurAutorCombat ";
									$resultNameDresseur = mysqli_query($conn, $sqlNameDresseur);
									$rowNameDresseur = mysqli_fetch_assoc($resultNameDresseur);
                                    if($row["is_banned"])
                                    {
                                        $hidenBanCss =  "banned".$row["is_banned"];
                                    }
                                    else
                                    {

                                        $hidenBanCss =  "hiden".$rowNameDresseur["hide"];
                                    }
									
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
				<td>
                <?php 
                        if(!$rowNameDresseur["hide"])
                        {   
                ?>
					<button class="hideButton" id="<?php echo $rowNameDresseur["id"];?>">Masquer</button>
                    <?php 
                        }
                        else
                        {
                     ?>
					<button class="banButton" id="<?php echo $rowNameDresseur["id"];?>">Démasquer</button>
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