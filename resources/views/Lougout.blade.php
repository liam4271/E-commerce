<html>
    <head>
        <title>Logout</title>
        <script>
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost:8000/Logout", true);");

            xhr.setRequestHeader("Accept", "application/json");
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onload = () => console.log(xhr.responseText);

            let data = `{
              "Id": "1",
            }`;

            xhr.send(data);
            window.location.href = "localhost:8000";
        </script>
    </head>
</html>
