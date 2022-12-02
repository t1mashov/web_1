
var ct = 1;

function show_hide_struct(txt) {
    let struct = document.getElementById('id_struct');
    if (ct % 2 == 0) {
        struct.textContent = 'нажмите для просмотра'
    }
    else {
        struct.textContent = txt;
    }
    ct += 1;
    console.log(ct);
}