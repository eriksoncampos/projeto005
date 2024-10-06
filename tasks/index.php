<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <section>

    </section>
    <script>
        async function populate() {
            
            const requestURL = "https://projetosecrs.000webhostapp.com/tasks/get_tasks.php";
            const request = new Request(requestURL);

            const response = await fetch(request);
            const resultadoText = await response.text();

            const resultado = JSON.parse(resultadoText);
            populateHeader(resultado);
        }

        function populateHeader(obj) {
            const header = document.querySelector('header');
            const myH1 = document.createElement('h1');
            myH1.textContent = obj.id;
            header.appendChild(myH1);

            const myPara = document.createElement('p');
            myPara.textContent = 'Titulo : ${obj.title} || Completada : ${obj.completed}';
            header.appendChild(myPara);
        }

        populate();
    </script>
</body>
</html>