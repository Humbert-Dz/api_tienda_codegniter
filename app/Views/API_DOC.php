<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación de la API</title>
    <style>
        html {
            scrollbar-width: thin;
            scrollbar-gutter: stable;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
            margin-top: 20px;
        }

        p {
            color: #666;
        }

        code {
            background-color: #f4f4f4;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: monospace;
        }

        .accordion {
            border: 1px solid #ddd;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .accordion-header {
            background-color: #f1f1f1;
            color: #333;
            cursor: pointer;
            padding: 10px;
            font-weight: bold;
        }

        .accordion-body {
            padding: 10px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .accordion-body p {
            margin: 0;
        }

        .accordion-body code {
            display: block;
            background-color: #f9f9f9;
            padding: 10px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Documentación de la API TIENDA-USUARIOS</h1>
        <p style="text-align: center;">¡Bienvenido a la documentación de nuestra API!</p>

        <h2>Recursos Disponibles</h2>
        <ul>
            <li><strong><span style="color:#06d6a0;">GET:</span> /usuarios</strong> - Obtiene la lista de usuarios.</li>
            <li><strong><span style="color:#06d6a0;">GET:</span> /searchById/{id}</strong> - Obtiene un usuario por su
                id.</li>
            <li><strong><span style="color:#06d6a0;">GET:</span> /getUsuariosByPostalCode/{postal_code}</strong> -
                Obtiene usuarios por su codigo postal.</li>
            <li><strong><span style="color:#06d6a0;">GET:</span> /getUsuariosByExteriorNum/{numero_exterior}</strong> -
                Obtiene usuarios por su código postal.</li>
            <li><strong><span style="color:#06d6a0;">GET:</span> /getUsuariosNameLetter/{letra}</strong> - Obtiene
                usuarios que contengas {letra} en su nombre.</li>
            <li><strong><span style="color:#06d6a0;">GET:</span> /getUsuariosNames</strong> - Obtiene la lista de los
                nombres completos de los usuarios.</li>
            <li><strong><span style="color:#06d6a0;">GET:</span> /getEmails</strong> - Obtiene la lista de los correos
                de los usuarios.</li>

        </ul>

        <h2>Descripción de los Recursos</h2>

        <!-- Agrega más descripciones según los recursos de tu API -->


        <!-- primer descripcion -->
        <div class="accordion">
            <div class="accordion-header">/usuarios</div>
            <div class="accordion-body">
                <br>
                <p>Este endpoint devuelve la lista de todos los usuarios registrados en el sistema.</p>
                <p><strong>Método:</strong> GET</p>
                <p><strong>Parámetros:</strong> Ninguno</p>
                <p><strong>Respuesta:</strong> Un arreglo JSON con la información de los usuarios.</p>
                <code>
            <pre>
{
    "message": "busqueda existosa",
    "data": [
                {
                    "id": "1",
                    "nombre": "Juan",
                    "ap_paterno": "López",
                    "ap_materno": "Pérez",
                    "fecha_nacimiento": "1990-05-15",
                    "correo": "juan.lopez@example.com",
                    "contrasena": "contraseña123",
                    "telefono": "5551234567",
                    "estado": "Ciudad de México",
                    "municipio": "Benito Juárez",
                    "cod_postal": "03610",
                    "calle": "Av. Insurgentes Sur",
                    "num_exterior": "123"
                },
                {
                    "id": "2",
                    "nombre": "María",
                    "ap_paterno": "García",
                    "ap_materno": "Hernández",
                    "fecha_nacimiento": "1985-09-20",
                    "correo": "maria.garcia@example.com",
                    "contrasena": "password456",
                    "telefono": "5552345678",
                    "estado": "Estado de México",
                    "municipio": "Toluca",
                    "cod_postal": "50090",
                    "calle": "Calle Morelos",
                    "num_exterior": "456"
                }
            ]
}
            </pre>
        </code>
            </div>
        </div>

        <!-- segunda descripcion -->
        <div class="accordion">
            <div class="accordion-header">/searchById/1</div>
            <div class="accordion-body">
                <br>
                <p>Este endpoint devuelve un usuario de acuerdo a su id.</p>
                <p><strong>Método:</strong> GET</p>
                <p><strong>Parámetros:</strong> Ninguno</p>
                <p><strong>Respuesta:</strong> Un objeto JSON con la información de el usuario.</p>
                <code>
            <pre>
{
    "message": "busqueda existosa",
    "data": {
        "id": "1",
        "nombre": "Juan",
        "ap_paterno": "López",
        "ap_materno": "Pérez",
        "fecha_nacimiento": "1990-05-15",
        "correo": "juan.lopez@example.com",
        "contrasena": "contraseña123",
        "telefono": "5551234567",
        "estado": "Ciudad de México",
        "municipio": "Benito Juárez",
        "cod_postal": "03610",
        "calle": "Av. Insurgentes Sur",
        "num_exterior": "123"
    }
}
            </pre>
        </code>
            </div>
        </div>

        <!-- tercera descripcion -->
        <div class="accordion">
            <div class="accordion-header">/getUsuariosByPostalCode/29000</div>
            <div class="accordion-body">
                <br>
                <p>Este endpoint devuelve un usuario de acuerdo a su id.</p>
                <p><strong>Método:</strong> GET</p>
                <p><strong>Parámetros:</strong> Ninguno</p>
                <p><strong>Respuesta:</strong> Un objeto JSON con la información de el usuario.</p>
                <code>
            <pre>
{
    "message": "busqueda existosa",
    "data": {
        "id": "13",
        "nombre": "Luis",
        "ap_paterno": "Fernández",
        "ap_materno": "Fuentes",
        "fecha_nacimiento": "1995-02-25",
        "correo": "luis.fernandez@example.com",
        "contrasena": "test789",
        "telefono": "5553456789",
        "estado": "Chiapas",
        "municipio": "Tuxtla Gutiérrez",
        "cod_postal": "29000",
        "calle": "Av. Central",
        "num_exterior": "2829"
    }
}
            </pre>
        </code>
            </div>
        </div>

        <!-- cuarta descripcion -->
        <div class="accordion">
            <div class="accordion-header">/getUsuariosByExteriorNum/1617</div>
            <div class="accordion-body">
                <br>
                <p>Este endpoint devuelve uno o varios usuarios de acuerdo a su numero exterior.</p>
                <p><strong>Método:</strong> GET</p>
                <p><strong>Parámetros:</strong> Ninguno</p>
                <p><strong>Respuesta:</strong> Un objeto JSON con la información de el usuario.</p>
                <code>
            <pre>
{
    "message": "busqueda existosa",
    "data": [
        {
            "id": "7",
            "nombre": "Javier",
            "ap_paterno": "Sánchez",
            "ap_materno": "Ramírez",
            "fecha_nacimiento": "1996-08-12",
            "correo": "javier.sanchez@example.com",
            "contrasena": "qwerty123",
            "telefono": "5557890123",
            "estado": "Guanajuato",
            "municipio": "León",
            "cod_postal": "37000",
            "calle": "Blvd. López Mateos",
            "num_exterior": "1617"
        }
    ]
}
            </pre>
        </code>
            </div>
        </div>

        <!-- quinta descripcion -->
        <div class="accordion">
            <div class="accordion-header">/getUsuariosNameLetter/A</div>
            <div class="accordion-body">
                <br>
                <p>Este endpoint devuelve uno o varios usuarios que contenga una letra especificada en su nombre.</p>
                <p><strong>Método:</strong> GET</p>
                <p><strong>Parámetros:</strong> Ninguno</p>
                <p><strong>Respuesta:</strong> Un objeto JSON con la información de el usuario.</p>
                <code>
            <pre>
{
    {
        "message": "busqueda existosa",
        "data": [
            {
                "nombre": "Juan",
                "ap_paterno": "López",
                "ap_materno": "Pérez"
            },
            {
                "nombre": "María",
                "ap_paterno": "García",
                "ap_materno": "Hernández"
            },
            {
                "nombre": "Ana",
                "ap_paterno": "Rodríguez",
                "ap_materno": "Jiménez"
            },
            {
                "nombre": "Carlos",
                "ap_paterno": "Hernández",
                "ap_materno": "López"
            },
            {
                "nombre": "Laura",
                "ap_paterno": "Torres",
                "ap_materno": "Díaz"
            },
            {
                "nombre": "Javier",
                "ap_paterno": "Sánchez",
                "ap_materno": "Ramírez"
            },
            {
                "nombre": "Fernanda",
                "ap_paterno": "Gómez",
                "ap_materno": "Ruiz"
            },
            {
                "nombre": "Ricardo",
                "ap_paterno": "Vargas",
                "ap_materno": "Sánchez"
            },
            {
                "nombre": "Alejandra",
                "ap_paterno": "Díaz",
                "ap_materno": "González"
            },
            {
                "nombre": "Sofía",
                "ap_paterno": "Luna",
                "ap_materno": "Herrera"
            },
            {
                "nombre": "Elena",
                "ap_paterno": "Cruz",
                "ap_materno": "Ortega"
            },
            {
                "nombre": "Patricia",
                "ap_paterno": "Morales",
                "ap_materno": "Vargas"
            },
            {
                "nombre": "Verónica",
                "ap_paterno": "Ramos",
                "ap_materno": "Guerrero"
            },
            {
                "nombre": "Raul",
                "ap_paterno": "Herrera",
                "ap_materno": "Flores"
            },
            {
                "nombre": "Gloria",
                "ap_paterno": "Pineda",
                "ap_materno": "Nava"
            }
        ]
    }
}
            </pre>
        </code>
            </div>
        </div>

        <!-- sexta descripcion -->
        <div class="accordion">
        <div class="accordion-header">/getUsuariosNames</div>
        <div class="accordion-body">
        <br>
        <p>Este endpoint devuelve todos los nombres de los usuarios en el sistema.</p>
        <p><strong>Método:</strong> GET</p>
        <p><strong>Parámetros:</strong> Ninguno</p>
        <p><strong>Respuesta:</strong> Un objeto JSON con la información de el usuario.</p>
        <code>
            <pre>
{
    "message": "busqueda existosa",
    "data": [
        {
            "nombre": "Juan",
            "ap_paterno": "López",
            "ap_materno": "Pérez"
        },
        {
            "nombre": "María",
            "ap_paterno": "García",
            "ap_materno": "Hernández"
        },
        {
            "nombre": "Pedro",
            "ap_paterno": "Martínez",
            "ap_materno": "Gómez"
        },
        {
            "nombre": "Ana",
            "ap_paterno": "Rodríguez",
            "ap_materno": "Jiménez"
        },
        {
            "nombre": "Carlos",
            "ap_paterno": "Hernández",
            "ap_materno": "López"
        },
        {
            "nombre": "Laura",
            "ap_paterno": "Torres",
            "ap_materno": "Díaz"
        },
        {
            "nombre": "Javier",
            "ap_paterno": "Sánchez",
            "ap_materno": "Ramírez"
        },
        {
            "nombre": "Fernanda",
            "ap_paterno": "Gómez",
            "ap_materno": "Ruiz"
        },
        {
            "nombre": "Ricardo",
            "ap_paterno": "Vargas",
            "ap_materno": "Sánchez"
        },
        {
            "nombre": "Alejandra",
            "ap_paterno": "Díaz",
            "ap_materno": "González"
        },
        {
            "nombre": "José",
            "ap_paterno": "Gutiérrez",
            "ap_materno": "Martínez"
        },
        {
            "nombre": "Sofía",
            "ap_paterno": "Luna",
            "ap_materno": "Herrera"
        },
        {
            "nombre": "Luis",
            "ap_paterno": "Fernández",
            "ap_materno": "Fuentes"
        },
        {
            "nombre": "Elena",
            "ap_paterno": "Cruz",
            "ap_materno": "Ortega"
        },
        {
            "nombre": "Miguel",
            "ap_paterno": "Reyes",
            "ap_materno": "Castillo"
        },
        {
            "nombre": "Patricia",
            "ap_paterno": "Morales",
            "ap_materno": "Vargas"
        },
        {
            "nombre": "Jorge",
            "ap_paterno": "Ortiz",
            "ap_materno": "Mendoza"
        },
        {
            "nombre": "Verónica",
            "ap_paterno": "Ramos",
            "ap_materno": "Guerrero"
        },
        {
            "nombre": "Raul",
            "ap_paterno": "Herrera",
            "ap_materno": "Flores"
        },
        {
            "nombre": "Gloria",
            "ap_paterno": "Pineda",
            "ap_materno": "Nava"
        }
    ]
}
            </pre>
        </code>
            </div>
        </div>

        <!-- septima descripcion -->
        <div class="accordion">
        <div class="accordion-header">/getEmails</div>
        <div class="accordion-body">
        <br>
        <p>Este endpoint devuelve todos los correos de los usuarios en el sistema.</p>
        <p><strong>Método:</strong> GET</p>
        <p><strong>Parámetros:</strong> Ninguno</p>
        <p><strong>Respuesta:</strong> Un objeto JSON con la información de el usuario.</p>
        <code>
            <pre>
            {
    "message": "busqueda existosa",
    "data": [
        {
            "correo": "alejandra.diaz@example.com"
        },
        {
            "correo": "ana.rodriguez@example.com"
        },
        {
            "correo": "carlos.hernandez@example.com"
        },
        {
            "correo": "elena.cruz@example.com"
        },
        {
            "correo": "fernanda.gomez@example.com"
        },
        {
            "correo": "gloria.pineda@example.com"
        },
        {
            "correo": "javier.sanchez@example.com"
        },
        {
            "correo": "jorge.ortiz@example.com"
        },
        {
            "correo": "jose.gutierrez@example.com"
        },
        {
            "correo": "juan.lopez@example.com"
        },
        {
            "correo": "laura.torres@example.com"
        },
        {
            "correo": "luis.fernandez@example.com"
        },
        {
            "correo": "maria.garcia@example.com"
        },
        {
            "correo": "miguel.reyes@example.com"
        },
        {
            "correo": "patricia.morales@example.com"
        },
        {
            "correo": "pedro.martinez@example.com"
        },
        {
            "correo": "raul.herrera@example.com"
        },
        {
            "correo": "ricardo.vargas@example.com"
        },
        {
            "correo": "sofia.luna@example.com"
        },
        {
            "correo": "veronica.ramos@example.com"
        }
    ]
}
            </pre>
        </code>
            </div>
        </div>

    </div>

    <script>
        const accordions = document.querySelectorAll('.accordion-header');

        accordions.forEach(accordion => {
            accordion.addEventListener('click', () => {
                accordion.classList.toggle('active');
                const panel = accordion.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        });
    </script>
</body>

</html>