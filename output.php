<?php
  // Connexion à la base de données
  $bdd= new PDO('mysql:host=localhost; dbname=gcba', 'root', 'passer'); 

  // // Infos de l'inustrie
  $demandeur=$_REQUEST['demandeur'];
  $type_industrie=$_REQUEST['type_industrie'];
  $industrie=$_REQUEST['industrie'];
  $nb_aff_amont=$_REQUEST['nb_aff_amont'];
  $lieu=$_REQUEST['lieu'];
  $milieu_recep=$_REQUEST['milieu_recep'];
  
  $nbre_cont=$_REQUEST['nbre_cont'];
  $const_k=$_REQUEST['const_k'];
  

  // // Informations sur le milieu récepteur
  $qe=$_REQUEST['qe'];
  $qr=$_REQUEST['qr'];
  $f=$_REQUEST['f'];
  $ti=$_REQUEST['ti'];

  // // Infos sur les contaminants
  // // Contaminants
  // Il faut remplir au moins 2 contaminants pour soumettre le formulaire
  $c1 = $_REQUEST['cont1'];
  $c2 = $_REQUEST['cont2'];
  if (!isset($_REQUEST['cont3'])) {
    $c3 = '';   
  }else {
    $c3=$_REQUEST['cont3'];
  }
  if (!isset($_REQUEST['cont4'])) {
    $c4 = '';   
  }else {
    $c4=$_REQUEST['cont4'];
  }
  if (!isset($_REQUEST['cont5'])) {
    $c5 = '';   
  }else {
    $c5=$_REQUEST['cont5'];
  }
  if (!isset($_REQUEST['cont6'])) {
    $c6 = '';   
  }else {
    $c6=$_REQUEST['cont6'];
  }
  if (!isset($_REQUEST['cont7'])) {
    $c7 = '';   
  }else {
    $c7=$_REQUEST['cont7'];
  }
  if (!isset($_REQUEST['cont8'])) {
    $c8 = '';   
  }else {
    $c8=$_REQUEST['cont8'];
  }
  if (!isset($_REQUEST['cont9'])) {
    $c9 = '';   
  }else {
    $c9=$_REQUEST['cont9'];
  }
  if (!isset($_REQUEST['cont10'])) {
    $c10 = '';   
  }else {
    $c10=$_REQUEST['cont10'];
  }
  

  // // affluent en mg/l
  $aff1 = $_REQUEST['c_afflu1'];
  $aff2 = $_REQUEST['c_afflu2'];
  if (!isset($_REQUEST['c_afflu3'])) {
    $aff3 = '';   
  }else {
    $aff3=$_REQUEST['c_afflu3'];
  }
  if (!isset($_REQUEST['c_afflu4'])) {
    $aff4 = '';   
  }else {
    $aff4=$_REQUEST['c_afflu4'];
  }
  if (!isset($_REQUEST['c_afflu5'])) {
    $aff5 = '';   
  }else {
    $aff5=$_REQUEST['c_afflu5'];
  }
  if (!isset($_REQUEST['c_afflu6'])) {
    $aff6 = '';   
  }else {
    $aff6=$_REQUEST['c_afflu6'];
  }
  if (!isset($_REQUEST['c_afflu7'])) {
    $aff7 = '';   
  }else {
    $aff7=$_REQUEST['c_afflu7'];
  }
  if (!isset($_REQUEST['c_afflu8'])) {
    $aff8 = '';   
  }else {
    $aff8=$_REQUEST['c_afflu8'];
  }
  if (!isset($_REQUEST['c_afflu9'])) {
    $aff9 = '';   
  }else {
    $aff9=$_REQUEST['c_afflu9'];
  }
  if (!isset($_REQUEST['c_afflu10'])) {
    $aff10 = '';   
  }else {
    $aff10 = $_REQUEST['c_afflu10'];
  }
 

  // // amont Cam en mg/l
  $a1 = $_REQUEST['c_amont1'];
  $a2 = $_REQUEST['c_amont2'];
  if (!isset($_REQUEST['c_amont3'])) {
    $a3 = '';   
  }else {
    $a3 = $_REQUEST['c_amont3'];
  }
  if (!isset($_REQUEST['c_amont4'])) {
    $a4 = '';   
  }else {
    $a4 = $_REQUEST['c_amont4'];
  }
  if (!isset($_REQUEST['c_amont5'])) {
    $a5 = '';   
  }else {
    $a5 = $_REQUEST['c_amont5'];
  }
  if (!isset($_REQUEST['c_amont6'])) {
    $a6 = '';   
  }else {
    $a6 = $_REQUEST['c_amont6'];
  }
  if (!isset($_REQUEST['c_amont7'])) {
    $a7 = '';   
  }else {
    $a7 = $_REQUEST['c_amont7'];
  }
  if (!isset($_REQUEST['c_amont8'])) {
    $a8 = '';   
  }else {
    $a8 = $_REQUEST['c_amont8'];
  }
  if (!isset($_REQUEST['c_amont9'])) {
    $a9 = '';   
  }else {
    $a9 = $_REQUEST['c_amont9'];
  }
  if (!isset($_REQUEST['c_amont10'])) {
    $a10 = '';   
  }else {
    $a10 = $_REQUEST['c_amont10'];
  }
 


  // Base de données => table inputs
  $sql1=$bdd->prepare("INSERT INTO entreprises (demandeur, type_industrie, industrie,nb_aff_amont,	
  lieu, recepteur, nbe_cont, const_k,	qe,	qr,	f,	ti) 
  VALUES ( ?,?,?,?,?, ?,?,?, ?,?,?, ?)");
  $status = $sql1->execute(array($demandeur, $type_industrie, $industrie, $nb_aff_amont, $lieu, 
  $milieu_recep, $nbre_cont, $const_k, $qe, $qr, $f, $ti));
  var_dump($status);

  // Id entreprise
  $id = $bdd -> query("SELECT * FROM entreprises WHERE demandeur = $demandeur");
  $id = $id -> fetchAll(PDO::FETCH_OBJ);
  var_dump($id);

   // Base de données => table contaminants
  // $sql2 = $bdd->prepare("INSERT into contaminants (contaminant,	c_afflu,	c_amont, id_entreprise) 
  // VALUES ( ?, ?, ?, ?)");
  // $status2 = $sql2->execute(array($c1,$aff1,$a1, $id[0][0]));
  // var_dump($status2);

 
  // Display data
//   $projets = $bdd -> query("SELECT * FROM projets");
//   $cpt = 1;
//    while( $rep = $projets->fetch()){
// ?>
<!-- // <tr>
// <td><?php //echo $cpt; ?></td>
// <td><?php //echo $rep['nom_projet'] ?></td>
// <td><?php //echo $rep['secteur'] ?></td>
// <td><a href="aff.php?id=<?php //echo $rep['id']; ?>&compte=<?php //echo $rep['id_compte']; ?>"><button class="btn btn-info">Afficher</button></a></td>
// </tr>
//   <?php //$cpt++; //}  -->


?>


























<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>GCBA</title>
  </head>
  <body>
    <div class="jumbotron text-center">
    <h1 style="color:#89CFF0;font-size:bold">Projet GCBA</h1>
    <p style="font-size:18px">Output !</p>
    </div>

    <div class="container">
      
      <form action="./output.php" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center" style="background-color:	#89CFF0">
               <h3>Informations industrie</h3>
        </div>
        <br>
        <div class="row">
        <table class="table">
           
            <tbody>
              <tr>
                <th scope="row">Nom du demandeur :</th>
                <td>X</td>
               
              </tr>
              <tr>
                <th scope="row">Type d’industrie : </th>
                <td>Y</td>
                
              </tr>
              <tr>
                <th scope="row">Emplacement de l’industrie</th>
                <td>Z</td>
               
              </tr>
              <tr>
                <th scope="row">Emplacement de l’industrie</th>
                <td>K</td>
               
              </tr>
            </tbody>
          </table> 
        </div>
           <br>
          <div class="row justify-content-center" style="background-color:	#89CFF0">
                <h3>OERs et interprétations</h3>
                 
          </div>
          <br>

          <div class="row">
            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">CPC(EO)</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td>Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">CPC(O)</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td style="background-color:red">Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>
          </div>



          <br>


          <div class="row">
            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">VAFe</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td>Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">CVAA</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td style="background-color:red">Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>
          </div>








          <br>









          <div class="row">
            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">CVAC</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td>Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">CFTP</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td style="background-color:red">Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>
          </div>








          <br>







          <div class="row">
            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">CARE</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td>Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5 text-center">
                <h3 style="background-color:#89CFF0;">Toxicité</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Contaminants</th>
                      <th scope="col">Valeur OER en mg/l</th>
                      <th scope="col">Interprétation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>nickel</td>
                      <td>1,702</td>
                      <td style="background-color:red">Norme respectée</td>
                   
                    </tr>
                    <tr>
                      
                      <td>Plomb</td>
                      <td>0,2452</td>
                      <td>Norme respectée</td>
                    </tr>
                   
                  </tbody>
                </table>
            </div>
          </div>
        
  
           
                  
          </form>
       </div>
     
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>