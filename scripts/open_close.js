'use strict';

function auth_open() {
    document.getElementById('auth').style.display = 'block';
}

function auth_close() {
    document.getElementById('auth').style.display = 'none';
}
function fastForm_open() {
    document.getElementById('fastForm').style.display = 'block';
    document.getElementById('blackout').style.display = 'block';
}

function fastForm_close() {
    document.getElementById('fastForm').style.display = 'none';
    document.getElementById('blackout').style.display = 'none';
}

function image_zoom() {
    document.getElementById('background_image').style.display = 'block';
    document.getElementById('full_image').style.display = 'block';
}

function image_close() {
    document.getElementById('background_image').style.display = 'none';
    document.getElementById('full_image').style.display = 'none';
}

function show_info_discount() {
    document.getElementById('five_per').style.display = 'block';
}

function close_info_discount() {
    document.getElementById('five_per').style.display = 'none';
}

function show_history() {
    document.getElementById('history').style.display = 'block';
    document.getElementById('change').style.display = 'none';
}

function show_change() {
    document.getElementById('history').style.display = 'none';
    document.getElementById('change').style.display = 'block';
}