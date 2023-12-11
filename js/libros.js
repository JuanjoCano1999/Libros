    function validarFormulario() {

            var id = document.getElementById("id").value;
            var titulo = document.getElementById("titulo").value;
            var tipo = document.getElementById("tipo").value;
            var autor = document.getElementById("autor").value;
            var precio = document.getElementById("precio").value;
            var idioma = document.getElementById("idioma").value;
            
            // Validar id
            if (id === "") {
                document.getElementById("errorId").innerHTML = "Por favor, ingresa el titulo.";
                return false;
            } else {
                document.getElementById("errorId").innerHTML = "";
            }

            // Validar titulo
            if (titulo === "") {
                document.getElementById("errorTitulo").innerHTML = "Por favor, ingresa el titulo.";
                return false;
            } else {
                document.getElementById("errorTitulo").innerHTML = "";
            }

            // Validar tipo
            if (tipo === "") {
                document.getElementById("errorTipo").innerHTML = "Por favor, ingresa un tipo válido.";
                return false;
            } else {
                document.getElementById("errorTipo").innerHTML = "";
            }

            // Validar ISBN
            if (ISBN.length < 9) {
                document.getElementById("errorISBN").innerHTML = "El ISBN debe tener al menos 9 caracteres.";
                return false;
            } else {
                document.getElementById("errorISBN").innerHTML = "";
            }

               // Validar tipo
               if (autor === "") {
                document.getElementById("errorAutor").innerHTML = "Por favor, ingresa un tipo válido.";
                return false;
            } else {
                document.getElementById("errorAutor").innerHTML = "";
            }

               // Validar tipo
               if (precio === "") {
                document.getElementById("errorPrecio").innerHTML = "Por favor, ingresa un tipo válido.";
                return false;
            } else {
                document.getElementById("errorPrecio").innerHTML = "";
            }

               // Validar tipo
               if (idioma === "") {
                document.getElementById("errorIdioma").innerHTML = "Por favor, ingresa un tipo válido.";
                return false;
            } else {
                document.getElementById("errorIdioma").innerHTML = "";
            }

            // Si todas las validaciones son exitosas, el formulario se envía
            alert("Formulario enviado correctamente");
            return true;
        }
