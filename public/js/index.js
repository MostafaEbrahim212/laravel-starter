window.onscroll = () => {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollButton").style.display = "block";
    } else {
        document.getElementById("scrollButton").style.display = "none";
    }
};

const topFunction = () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};