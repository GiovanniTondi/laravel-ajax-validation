require('./bootstrap');
window.$ = require('jquery');



function getData() {

    $.ajax({

        url: '/api/posts/all',
        method: 'get',
        success: function (posts) {

            printData(posts);
        },
        error: function (err) {

            console.log(err);
        }
    });
}

function printData(data) {

    var target = $('#posts');
    target.html('');

    for (var i = 0; i < data.length; i++) {

        target.append('<a href="#" class="list-group-item list-group-item-action">' + data[i]['title']
                    + '<span class="badge badge-primary badge-pill">' + data[i]['like'] + '</span>' + '</a>');
    }
}

function init() {

    getData();
}


$(document).ready(init);
