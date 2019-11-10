let newVar = [
    contacto1 = new Contacto('sergio', 'comida'),
    contacto2 = new Contacto('miguel', 'videojuegos'),
    contacto3 = new Contacto('adrian', 'bar')];

localStorage.setItem('arrayContactosInicio', JSON.stringify(arrayContactos));