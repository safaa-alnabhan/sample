var img = document.getElementById("img"),
            x = 0,
            imgs = [
            "images/1.jpg",
            "images/2.jpg",
            "images/3.jpg"];
        function slide() {
            img.src = imgs[x];
            if (x < imgs.length-1) {
                x++;
            }
            else {
                x = 0;
            }
            setTimeout("slide()", 1200);
        }
