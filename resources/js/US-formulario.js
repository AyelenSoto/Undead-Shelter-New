function handleLogin(event) {
    event.preventDefault();
    const email = document.getElementById('login-email').value;
    alert('¡Bienvenido! Iniciando sesión con: ' + email);
}

function handleRegister(event) {
    event.preventDefault();
    const nombre = document.getElementById('nombre').value;
    alert('¡Cuenta creada! Bienvenido, ' + nombre);
}