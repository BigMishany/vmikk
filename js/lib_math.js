$.sinus=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = Math.sin(current);
        current=current+step;
    }
    console.log(table);
    return table;
}
$.cosinus=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = Math.cos(current);
        current=current+step;
    }
    console.log(table);
    return table;
}



$.giper=function (a,b,col) {
    var  k = prompt("Введитте k");
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        if(current!=0)
        {
        table[row][0] = current;
        table[row][1] = k/current;
        current=current+step;
    }}
    console.log(table);
    return table;
}

$.expanen=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = Math.exp(current);
        current=current+step;
    }
    console.log(table);
    return table;
}


$.ln=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = Math.log(current);
        current=current+step;
    }
    console.log(table);
    return table;
}

$.arcsin1=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = Math.asin(current);
        current=current+step;
    }
    console.log(table);
    return table;
}


$.arccos1=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = Math.acos(current);
        current=current+step;
    }
    console.log(table);
    return table;
}

$.sqr=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = current*current;
        current=current+step;
    }
    console.log(table);
    return table;
}

$.sqr33=function (a,b,col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    var step = Math.abs((a) -(b))/col;
    console.log('step= ',step);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    var current=a;


    for (var row = 0; row < table.length; row++) {
        table[row][0] = current;
        table[row][1] = current*current*current;
        current=current+step;
    }
    console.log(table);
    return table;
}


$.figure=function (col) {
    console.log('a= ',a,'b= ',b,'c= ',col);
    col =parseInt(col);
    console.log('step= ',0);
    var table = new Array(col+1);
    for (var i = 0; i < table.length; i++)
        table[i] = new Array(1);
    for (var row = 0; row < table.length-1; row++) {
        table[row][0] = prompt("Введитте х["+(row+1)+"]");
        table[row][1] = prompt("Введитте y["+(row+1)+"]");
    }
    table[table.length-1][0] = table[0][0];
    table[table.length-1][1] = table[0][1];;

    // table[table.length-1][1] =table[table.length-1][1]+0.00000001   ;
    console.log(table);
    return table;
}

$.func=function (a,b,col) {
    var table = new Array(col+1);
    for (var i = 0; i <= col+1; i++)
        table[i] = new Array(1);
    for (var row = 0; row < table.length; row++) {

        table[row][0] = a[row];
        table[row][1] = b[row];
    }
    console.log(table);
    return table;
}