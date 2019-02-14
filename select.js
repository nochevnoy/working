    function add_new() {
        d1 = document.getElementById('additional');
        d1.insertAdjacentHTML('afterbegin', '<input type="text" placeholder="YOUR NAME"/><br><input type="email" placeholder="YOUR EMAIL"/><br><input type="tel" placeholder="YOUR TELE"/><br><input type="button" id="send_email" value="Отправить" />');
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