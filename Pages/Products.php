<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/products.css">
    <title>ClaquetteProject</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/Assets/Images/icons8-sandal-64.png">

</head>
<body>
    <?php include '../Layouts/header.php' ?> 

    <div class="title"><h1>Claquettes</h1> </div>

    
    <p class="Description">  Le collectif Claquette project propose une marque de claquette de plage et de ville unique qui allie une production 100% française, écoresponsable et personnalisable. Grâce à ses ateliers sur Paris, le collectif s'engage à mettre à votre disposition les mains d’or de ses artisans pour manufacturer à la demande, sans aucun stock ni matière gâchée, votre paire de claquettes.
</p>

    <div class = "grid-container">

        <div class = " Card1 " >
            <div class = "image1"> <img class = "bordure" src="/Assets/Images/Claquettes1.jpeg" alt="une paire de claquettes"> </div>
            <div class= "textImage1"> <p class = " Modelclaquette"> Model 1 <br><br> taille :</p>
        
         <select class = " my-select-menu " >    
         <option> 36 </option>
         <option> 37 </option>
         <option> 38 </option>
            <option> 39</option>
         <option> 40 </option>
         <option>41</option>
         </select>
         <button type="button"> Add </button>
            </div>
            </div>


            <div class = " Card2 " >
                <div class = "image2">  <img class ="bordure" src="/Assets/Images/Claquettas.jpeg" alt="une paire de claquettes"> </div>
                <div class = "textImage2"> <p> Model 2  <br> <br> taille :</p>
                    <select class = " my-select-menu " >    
                         <option> 36 </option>
                        <option> 37 </option>
                        <option> 38 </option>
                        <option> 39</option>
                         <option> 40 </option>
                         <option>41</option>
                 </select>
                    <button type= "button"> Add </button>
             </div>
            </div>

         <div class = " Card3 " >
                <div class = "image3"> <img class = "bordure" src="/Assets/Images/pexels-photo-8371657.jpeg" alt="une paire de claquettes"></div>
                <div class ="textImage3">  <p> Model 3<br><br> taille : </p>
                    <select class = " my-select-menu " > 
                          <option> 36 </option>
                          <option> 37 </option>   
                          <option> 38 </option>
                          <option> 39</option>
                          <option> 40 </option>
                          <option>41</option>
                     </select>
                        <button type= "button"> Add </button>
              </div>
         </div>

             <div class = " Card4 " >
                     <div class = "image4"> <img class = "bordure" src="/Assets/Images/CLAQUETAS.jpeg" alt="une paire de claquettes"> </div>
                     <div class = "textImage4">
                     <p> Model 4 <br><br> taille :</p>
                         <select class = " my-select-menu " >   
                            <option> 36 </option>
                            <option> 37 </option> 
                             <option> 38 </option>
                             <option> 39</option>
                             <option> 40 </option>
                             <option>41</option>
                         </select> 
                        <button type="button"> Add </button>
                    </div>
            </div>
</div>

    <?php include '../Layouts/footer.php' ?>    

</body>
</html>
