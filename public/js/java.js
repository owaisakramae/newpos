document.addEventListener("DOMContentLoaded", function () {
    // Select the offcanvas menu element
    var offcanvasMenu = document.getElementById("offcanvasMenu");
    // Select the menu toggle button
    var menuToggle = document.getElementById("menuToggle");

    // Add the 'open' class to the offcanvas menu and the toggle button
    offcanvasMenu.classList.remove("open");
    menuToggle.classList.add("open");

    // Add an event listener to toggle or close the offcanvas menu when the button is clicked
    menuToggle.addEventListener("click", function () {
        offcanvasMenu.classList.toggle("open");
        menuToggle.classList.toggle("open");

        if (offcanvasMenu.classList.contains("open")) {
            // If the offcanvas menu is open, remove 'close-container' class from all '.containers' elements
            containers.forEach(function (container) {
                container.classList.remove("close-container");
            });
            menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
        } else {
            // If the offcanvas menu is closed, add 'close-container' class to all '.containers' elements
            containers.forEach(function (container) {
                container.classList.add("close-container");
            });
            menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
        }
    });

    // Select the containers
    var containers = document.querySelectorAll(".containers");

    // Add the 'close-container' class to all '.containers' elements
    containers.forEach(function (container) {
        container.classList.add("close-container");
    });

    $(".sub-menu ul").hide();
    $(".sub-menu a").click(function () {
        $(this).parent(".sub-menu").children("ul").slideToggle("100");
        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
});

$(document).ready(function () {
    $("#myTable").DataTable();
});

$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var inputValue = $(this).val().toLowerCase();
        $("#myTable tbody tr").filter(function () {
            $(this).toggle(
                $(this).text().toLowerCase().indexOf(inputValue) > -1
            );
        });
    });
});

$(document).ready(function () {
    // Initialize Summernote
    $("#summernote").summernote({
        height: 200, // Set the height of the editor
        toolbar: [
            ["style", ["bold", "italic", "underline", "clear"]],
            ["para", ["ul", "ol"]],
            ["insert", ["link", "picture"]],
            ["table", ["table"]],
            ["view", ["fullscreen", "codeview"]],
        ],
    });
});

$(function () {
    $('input[name="daterange"]').daterangepicker(
        {
            opens: "left",
        },
        function (start, end, label) {
            console.log(
                "A new date selection was made: " +
                    start.format("YYYY-MM-DD") +
                    " to " +
                    end.format("YYYY-MM-DD")
            );
        }
    );
});
