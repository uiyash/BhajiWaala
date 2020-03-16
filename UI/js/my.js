darkToggleButtonFix();

function darkToggleButtonFix() {
    var bodyID = document.querySelector('body').id;
    if (bodyID === 'day-mode') {
        document.querySelector('#dark-toggle-text').innerText = ' Dark mode: ';
    } else {
        document.querySelector('#dark-toggle-text').innerText = ' Day mode: ';
    }
}