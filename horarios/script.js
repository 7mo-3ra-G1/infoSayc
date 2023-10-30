document.addEventListener("DOMContentLoaded", function() {
    const cursoButtons = document.querySelectorAll(".curso");
    const cursoInfo = document.getElementById("curso-info");
    
    cursoButtons.forEach(button => {
        button.addEventListener("click", function() {
            const cursoId = this.getAttribute("data-curso");
            cargarCurso(cursoId);
        });
    });

    function cargarCurso(cursoId) {
        // Realizar una solicitud AJAX a muestra_curso.php para cargar los detalles del curso
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `muestra_curso.php?curso=${cursoId}`, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                cursoInfo.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
});
