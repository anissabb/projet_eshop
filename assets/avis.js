
const stars=document.querySelectorAll('.stars a');
stars.forEach((star,indexClique)=>{
  star.addEventListener('click',()=>{

        //mettre les étoiles en "couleurs"
        stars.forEach((autreEtoile,autreIndex)=>{
            if(autreIndex<=indexClique){
                autreEtoile.classList.add("active");
            }
          
        });
      console.log(`l'étoile de l'index ${indexClique+1} a ete cliquée`);

      //Mettre star dans la base de données avec ajax

      axios({
        //renvoyer les étoiles dans la page produit détails
        url: target.route,
        method:'POST',
        data:star,
      })
      .then(function(response){
        console.log(response.data);

      })
  });
});

