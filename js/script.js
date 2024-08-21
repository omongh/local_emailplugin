// script.js
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('submit');

    btn.addEventListener('click', () => {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'http://207.148.4.203/local/emailplugin/testemail.php', true);
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                alert(xhr.responseText);
                console.log('Success:', xhr.responseText);
                // Handle the response data here if needed
            } else {
                console.error('Request failed with status:', xhr.status);
            }
        };
        xhr.onerror = function () {
            console.error('Request failed');
        };
        xhr.send();
    });
});
