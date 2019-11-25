class Libro {
    constructor(titulo, ISBN, tipo, ejemplares, disponibilidad, fecha, autor) {
        this.titulo = titulo;
        this.ISBN = ISBN;
        this.tipo = tipo;
        this.ejemplares = ejemplares;
        this.disponibilidad = disponibilidad;
        this.fecha = fecha;
        this.autor = [];
    }
}

let libros = [new Libro("JS", "4375512270118", "Ciencia ficcion", 300, true, "", autores[0]),
    new Libro("PHP", "5332351355016", "Aventura", 100, true, "", autores[1]),
    new Libro("CSS", "5280038344122", "Aventura", 200, false, "19/12/2019", autores[2]),
    new Libro("Servidores", "6859523270261", "Comedia", 200, false, "22/12/2019", autores[2])];
