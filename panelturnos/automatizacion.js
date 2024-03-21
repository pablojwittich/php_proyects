function ejecutar() 
{
    $.post("index.php", 

        function(response)
        {
            console.log(response);
        });
    console.log("Ejecutado hace 1 minuto");
}

// Llamar a hacerPeticion cada 60 segundos
setInterval(ejecutar, 60000);