function añadir() {
    let body = document.documentElement.lastChild;
    let ul = body.children[1];
    let li = document.createElement('li');
    let texto = document.createTextNode(document.getElementById('text').value);
    let text = li.appendChild(texto);
    ul.appendChild(li);
}