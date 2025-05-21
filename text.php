<html>
    <head>
        <title>text</title>
    </head>
    <body>
    <div>
                              <img src="gggsgfsg" onerror="replaceImageOnError(this)">
                            </div>
    </body>
    <script>
        function replaceImageOnError(imageElement) {
         console.log("bonjour");
    // Remplacez la source de l'image par une autre source
    imageElement.error = null;
    console.log(imageElement);
    imageElement.src = "image_error.jpg";
  }

    </script>
</html>