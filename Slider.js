var swiper = new Swiper(".swiper", {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    keyboard: true,
    autoplay: {
        delay: 5000, 
        disableOnInteraction: false, // Defina como "false" para continuar a reprodução automática após a interação do usuário
    },
});


var heartIcon = document.getElementById("heart-icon");
heartIcon.addEventListener("click", function() {
    // Verifique a cor atual do ícone do coração
    var currentColor = heartIcon.style.color;

    // Se a cor atual for diferente de vermelho, mude para vermelho; caso contrário, volte à cor original
    if (currentColor !== "red") {
        heartIcon.style.color = "red";
    } else {
        // Volte à cor original (ou à cor desejada)
        heartIcon.style.color = ""; // Isso removerá a cor inline e aplicará a cor do CSS
    }
});





