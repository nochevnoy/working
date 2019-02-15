    function add_new() {
        paste = '<form action="send.php" method="post">\
                 <input type="text" name="user_name" placeholder="YOUR NAME"/><br>\
                 <input type="email" name="user_email" placeholder="YOUR EMAIL"/><br>\
                 <input type="tel" name="user_tele" placeholder="YOUR TELE"/><br>\
                 <input type="submit" value="Отправить">\
                 </form>'
        d1 = document.getElementById('additional');
        d1.insertAdjacentHTML('afterbegin', paste);
    };


    function summ() {
        var abs = +0;
        var coeff = +1;
        var date = new Date();
        var m = date.getMonth();

        switch (m) {
            case 2:
                coeff = +1.05;
                break;
            case 3:
                coeff = +1.05;
                break;
            case 4:
                coeff = +1.05;
                break;
            case 8:
                coeff = +1.05;
                break;
            case 9:
                coeff = +1.05;
                break;
            case 10:
                coeff = +1.05;
                break;
            case 5:
                coeff = +1.15;
                break;
            case 6:
                coeff = +1.15;
                break;
            case 7:
                coeff = +1.15;
                break;
        };

        var f = document.getElementById('f').value;
        var s = document.getElementById('s').value;
        
        abs = (+f + +s) * +coeff;
        
        document.getElementById('inp').value = +abs;
    } 