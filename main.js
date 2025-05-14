function scrollDown() {
    document.getElementById("contact").scrollIntoView({behavior: "smooth"})
}

function scrollDownservices() {
    document.getElementById("services").scrollIntoView({behavior: "smooth"})
}


let btn = document.getElementById("btnTop")

 window.onscroll = function () {
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        btn.style.display = "block";
      } else {
        btn.style.display = "none";
      }
    };

    btn.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });