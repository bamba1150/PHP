<?php
require_once("./données/data.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="mystyle.css"/>
</head>
<body>
   <div class="container">
       <div class="filtre">
            <form method="post" action="">
                <div class="form-group">
                    <label for="">Niveau</label>
                    <select name="niveau" id="">
                        <option value=""></option>
                            <?php foreach($niveaux as $niveau):?>
                                <option value="<?= $niveau ?>"><?= $niveau ?></option>
                            <?php endforeach?>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="" class="filiere">Filieres</label>
                    <select name="filiere" id="">
                        <option value=""></option>
                        <?php foreach($filieres as $filiere):?>
                            <option value="<?=$filiere ?>"><?=$filiere?></option>
                        <?php endforeach?>
                    </select>
                    <button>OK</button>
                </div>
            </form>
       </div>
       <div class="table">
           <table>
               <thead>
                   <th>Niveau</th>
                   <th>Filieres</th>
                   <th>Actions</th>
               </thead>
               <tbody>
                   <?php foreach($classes as $classe):?>
                        <tr>
                            <td><?=$classe["filiere"]?></td>
                            <td><?=$classe["niveau"]?></td>
                            <td><a href="#">etudiants</a></td>
                        </tr>
                        <?php endforeach?>
               </tbody>
           </table>

       </div>

   </div> 
</body>
</html>