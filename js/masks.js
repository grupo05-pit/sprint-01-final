/* SCRIPT DAS MÁSCARAS DO FORMS DE CADASTRO DO USUÁRIO */

const form = document.querySelector('form')
form.addEventListener('submit', function (event) {
    const emailInput = document.getElementById('email')
    const passwordInput = document.getElementById('senha')

    const email = emailInput.value.trim()
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    if (!emailRegex.test(email)) {
        event.preventDefault()
        alert('Email inv�lido. Por favor, insira um email v�lido.')
        return
    }

    const password = passwordInput.value
    const uppercaseRegex = /[A-Z]/
    const digitRegex = /\d/
    if (!uppercaseRegex.test(password) || !digitRegex.test(password)) {
        event.preventDefault()
        alert('A senha deve conter pelo menos um caractere mai�sculo e um algarismo.')
        return
    }
})

function mascara_cpf() {
    var cpf = document.getElementById("cpf").value
    cpf = cpf.replace(/\D/g, "")

    if (cpf.length > 3 && cpf.length <= 6) {
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    } else if (cpf.length > 6 && cpf.length <= 9) {
        cpf = cpf.replace(/(\d{3})(\d{3})(\d)/, "$1.$2.$3")
    } else if (cpf.length > 9) {
        cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d)/, "$1.$2.$3-$4")
    }

    document.getElementById("cpf").value = cpf
}

function mascara_telefone() {

    var tel = document.getElementById("telefone").value
    console.log(tel)
    tel = tel.slice(0, 14)
    console.log(tel)
    document.getElementById("telefone").value = tel
    tel = document.getElementById("telefone").value.slice(0, 10)
    console.log(tel)

    var tel_formatado = document.getElementById("telefone").value
    if (tel_formatado[0] != "(") {
        if (tel_formatado[0] != undefined) {
            document.getElementById("telefone").value = "(" + tel_formatado[0];
        }
    }

    if (tel_formatado[3] != ")") {
        if (tel_formatado[3] != undefined) {
            document.getElementById("telefone").value = tel_formatado.slice(0, 3) + ")" + tel_formatado[3]
        }
    }

    if (tel_formatado[9] != "-") {
        if (tel_formatado[9] != undefined) {
            document.getElementById("telefone").value = tel_formatado.slice(0, 9) + "-" + tel_formatado[9]
        }
    }
}