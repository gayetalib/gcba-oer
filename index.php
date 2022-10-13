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
    <p style="font-size:18px">Les critères de qualité !</p>
    </div>

    <div class="container">
      
      <form action="./output.php" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center" style="background-color:	#89CFF0">
               <h3>Informations industrie</h3>
        </div>
        <br>
        <div class="row">
         
             <div class="col-md-5">
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom du demandeur</label>
                      <input type="text" class="form-control" name="demandeur" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir ici...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Type d’industrie</label>
                      <input type="text" class="form-control" name="type_industrie" id="exampleInputPassword1" placeholder="Saisir ici...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nom de l’industrie</label>
                      <input type="text" class="form-control" name="industrie" id="exampleInputPassword1" placeholder="Saisir ici...">
                    </div>
                    
                     
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-5">
              <div class="form-group">
                      <label for="exampleInputPassword1">Emplacement de l’industrie</label>
                      <input type="text" class="form-control" name="lieu" id="exampleInputPassword1" placeholder="Saisir ici...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Milieu récepteur</label>
                      <input type="text" class="form-control" name="milieu_recep" id="exampleInputPassword1" placeholder="Saisir ici...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nombre de contaminants</label>
                      <input type="number" onchange="generateContaminant(this.value)" class="form-control" name="nbre_cont" id="exampleInputPassword1" placeholder="Saisir ici...">
                    </div>
                               
              </div>

          
           </div>
           <br>
          <div class="row justify-content-center" style="background-color:	#89CFF0">
                <h3>Informations sur le milieu récepteur</h3>
          </div>
          <br>
          <div class="row">
          <div class="col-md-5">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Débit de l’effluent (Qe) </label>
                  <input type="number" class="form-control" name="qe" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Débit du milieu récepteur (Qr)</label>
                  <input type="number" class="form-control" name="qr" id="exampleInputPassword1" placeholder="Saisir ici...">
                </div>       
                <div class="form-group">
                      <label for="exampleInputPassword1">Nombre d’effluent en amont (n)</label>
                      <input type="number" class="form-control" name="nb_aff_amont" id="exampleInputPassword1" placeholder="Saisir ici...">
                </div>     
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5">
                <div class="form-group">
                  <label for="exampleInputPassword1">Fraction du débit de l’effluent (f)</label>
                  <input type="number" class="form-control" name="f" id="exampleInputPassword1" placeholder="Saisir ici...">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Temps de parcours (ti)</label>
                  <input type="number" class="form-control" name="ti" id="exampleInputPassword1" placeholder="Saisir ici...">
                </div> 
                <div class="form-group">
                      <label for="exampleInputPassword1">Constante de décroisance (k)</label>
                      <input type="number" class="form-control" name="const_k" id="exampleInputPassword1" placeholder="Saisir ici...">
                </div>           
          </div>
          </div>


          <br>
          <div class="row justify-content-center" style="background-color:	#89CFF0">
                <h3>Informations sur les contaminants</h3>
          </div>
          <br>

          <div class="row">
          <div class="col-md-4">
                <h5 style="text-align:center">Contaminants</h5>
                <!-- 10 contaminants -->
                <br>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont1" id="cont1" aria-describedby="emailHelp" placeholder="Saisir ici..." required>
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont2" id="cont2" aria-describedby="emailHelp" placeholder="Saisir ici..." required>
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont3" id="cont3" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont4" id="cont4" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont5" id="cont5" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont6" id="cont6" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont7" id="cont7" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont8" id="cont8" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont9" id="cont9" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>  
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cont10" id="cont10" aria-describedby="emailHelp" placeholder="Saisir ici...">
                </div>
             
          </div>
          <div class="col-md-4">
                 <h5 style="text-align:center">Concentration prévue à l’affluent en mg/l</h5>
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu1" id="c_afflu1" aria-describedby="emailHelp" placeholder="Saisir ici..." required>
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu2" id="c_afflu2" aria-describedby="emailHelp" placeholder="Saisir ici..." required>
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu3" id="c_afflu3" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu4" id="c_afflu4" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu5" id="c_afflu5" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu6" id="c_afflu6" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu7" id="c_afflu7" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu8" id="c_afflu8" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu9" id="c_afflu9" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_afflu10" id="c_afflu10" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                
               
                
                  
          </div>
          <div class="col-md-4">
                  <h5 style="text-align:center">Concentration en amont Cam en mg/l</h5>
                  <br>
                  <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont1" id="c_amont1" aria-describedby="emailHelp" placeholder="Saisir ici..." required>
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont2" id="c_amont2" aria-describedby="emailHelp" placeholder="Saisir ici..." required>
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont3" id="c_amont3" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont4" id="c_amont4" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont5" id="c_amont5" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>             
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont6" id="c_amont6" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont7" id="c_amont7" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>             
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont8" id="c_amont8" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>  
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont9" id="c_amont9" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>             
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="c_amont10" id="c_amont10" aria-describedby="emailHelp" placeholder="Saisir ici...">
                 </div>             
                                                    
          </div>
          </div>
          </div>
           <br>
           
          <div class="row justify-content-center">
               <button type="submit" class="btn btn-primary" style="background-color:#89CFF0; color:black;border-color:#89CFF0">Enregistrer</button>
          </div>
          
          </form>
          <br>
          <br>
       </div>
     


      <script>
          function generateContaminant(val) {
            // ! Algo non performant, juste en guise d'illustration...!
            // Non conseillé pour un systeme en production
            let id_cont, id_c_afflu, id_c_amont;
            let cont_name;
            switch(val) {
            case '1':
              document.getElementById('cont1').type = 'text';
              document.getElementById('c_afflu1').type = 'number';
              document.getElementById('c_amont1').type = 'number';

              cont_name = 'Contaminant ' + 1
              document.getElementById('cont1').placeholder = cont_name;    

              for (let i = 2; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

            case '2':
              for (let i = 1; i <= 2; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';
                           
                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }

              for (let i = 3; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

            case '3':
              for (let i = 1; i <= 3; i++) {
                id = 'cont'+ i ;            
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';
               
                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }

              for (let i = 4; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

            case '4':
              for (let i = 1; i <= 4; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';

                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }

              for (let i = 5; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

            case '5':
              for (let i = 1; i <= 5; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';

                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }
              for (let i = 6; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;


              case '6':
              for (let i = 1; i <= 6; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';

                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }
              for (let i = 7; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

              case '7':
              for (let i = 1; i <= 7; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';

                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }
              for (let i = 8; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

              case '8':
              for (let i = 1; i <= 8; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';

                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }
              for (let i = 9; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

              case '9':
              for (let i = 1; i <= 9; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';

                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }
              for (let i = 10; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i   
                document.getElementById(id).type = 'hidden';
                document.getElementById(id_c_afflu).type = 'hidden';
                document.getElementById(id_c_amont).type = 'hidden';
              }
              break;

              case '10':
              for (let i = 1; i <= 10; i++) {
                id = 'cont'+ i ; 
                id_c_afflu = 'c_afflu'+i;     
                id_c_amont = 'c_amont'+i      
                document.getElementById(id).type = 'text';
                document.getElementById(id_c_afflu).type = 'number';
                document.getElementById(id_c_amont).type = 'number';

                cont_name = 'Contaminant ' + i;
                document.getElementById(id).placeholder = cont_name;
              }          
              break;

            default:
              alert('NB : Impossible de rentrer 0 et plus de 10');
          }
          }
     </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>