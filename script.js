/*function replaceImageOnError(imageElement) {
  // Gestionnaire d'erreur pour l'image
  imageElement.onerror = function() {
    console.error('Erreur lors du chargement de l\'image');
  };

  // Remplace la source de l'image par une autre source
  imageElement.src = 'image_error.jpg';
}*/



function replaceImageOnError(imageElement) {
  console.log("bonjour");
    // Remplacez la source de l'image par une autre source
    imageElement.error = null;
    console.log(imageElement);
    imageElement.src = "image_error.jpg";
  }

/*<script>
  function replaceImageOnError(imageElement) {
    imageElement.onerror = function() {
      // Remplacez la source de l'image par une autre source
      imageElement.src = "404.jpg";
    };

    // Essayez de charger l'image
    imageElement.src = "chemin_vers_image.jpg";
  }
</script>*/
