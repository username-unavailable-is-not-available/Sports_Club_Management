function contentView(div) {
    if (div == 'loginLink') {
       document.getElementById("joinForm").style.display = "none";
       document.getElementById("loginForm").style.display = "block";
    } else {
        document.getElementById("joinForm").style.display = "block";
        document.getElementById("loginForm").style.display = "none";
    }
}