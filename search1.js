function performSearch() {
    var query = document.getElementById("search-query").value;
    if (query == "et" || query == "1010") {
        window.location.href = 'course1b.php';
    } else if (query == "ce" || query == "1020") {
        window.location.href = 'course2b.php';
    } else if (query == "me" || query == "1030") {
        window.location.href = 'course3b.php';
    } else if (query == "ct" || query == "1040") {
        window.location.href = 'course4b.php';
    } else {
        alert("Not found!");
    }
}





