//run the following code whenever a new pseudo-page is created
$('#verde').live('pageshow', function(event)) {

    // cache this page for later use (inside the AJAX function)
    var $this = $(this);

    // make an AJAX call to your PHP script
    $.getJSON('http://192.168.1.54/phonegap/ServerFile.php', function (response) {

        // create a variable to hold the parsed output from the server
        var output = [];

        // if the PHP script returned a success
        if (response.status == 'success') {

            // iterate through the response rows
            for (var key in response.items) {


                 // add each response row to the output variable
                 output.push('<li>' + response.items[key] + '</li>');
            }

        // if the PHP script returned an error
        } else {

            // output an error message
            output.push('<li>No Data Found</li>');
        }

        // append the output to the `data-role="content"` div on this page as a
        // listview and trigger the `create` event on its parent to style the
        // listview
        $this.children('[data-role="content"]').append('<ul data-role="listview">' + output.join('') + '</ul>').trigger('create');
    });
});