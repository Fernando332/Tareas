function sendVerificationCode(email) {
    // Simular envío de correo electrónico con código de verificación
    const verificationCode = generateVerificationCode();
    alert("Código de verificación enviado a su correo electrónico: " + verificationCode);

    // Mostrar el contenedor del código de verificación
    document.getElementById('verificationCodeContainer').style.display = 'block';
}

function generateVerificationCode() {
    // Generar un código de verificación de 6 dígitos aleatorio
    return Math.floor(100000 + Math.random() * 900000);
}

function verifyCode() {
    const verificationCode = document.getElementById('verificationCode').value;
    // Verificar el código ingresado aquí

    // Simular verificación exitosa
    document.getElementById('registrationForm').reset();
    document.getElementById('verificationCodeContainer').style.display = 'none';
    document.getElementById('verificationSuccessMessage').style.display = 'block';
}
  
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Aquí podrías enviar los datos del formulario al servidor para verificar y crear la cuenta
    // Luego, llamar a la función sendVerificationCode(email) para enviar el código de verificación
    sendVerificationCode(email);
});
