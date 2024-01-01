document.getElementById('subscribeBtn').addEventListener('click', () => {
    document.getElementById('subscribeForm').classList.toggle('hidden');
 });
 
 function saveEmail() {
    const email = document.getElementById('email').value;
    document.getElementById('confirmationMessage').innerText = `Obrigado! Seu e-mail ${email} foi cadastrado.`;
    document.getElementById('confirmationMessage').classList.toggle('hidden');
 
    // Aqui você deve enviar `email` para o seu servidor para salvá-lo em emails.txt
    console.log(email);
 }
 