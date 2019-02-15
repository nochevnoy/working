    function show_add() {
        document.getElementById('1st').hidden = false;
        document.getElementById('2nd').hidden = false;
        document.getElementById('3rd').hidden = false;
        document.getElementById('4th').hidden = false;
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