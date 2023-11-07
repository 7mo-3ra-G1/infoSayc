document.getElementById("planta-baja").addEventListener("click", function() {
    showFloor("planta-baja-map");
});

document.getElementById("primer-piso").addEventListener("click", function() {
    showFloor("primer-piso-map");
});

document.getElementById("segundo-piso").addEventListener("click", function() {
    showFloor("segundo-piso-map");
});

function showFloor(floorId) {
    const floors = document.querySelectorAll(".map-container");
    floors.forEach(floor => {
        floor.style.display = "none";
    });
    document.getElementById(floorId).style.display = "block";
}
