<?php include '../layouts/header.php'; ?>
<?php include '../layouts/sidebar.php'; ?>

<div>
<style>
        .contact-header {
            background-color: #dc3545;
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-right: 1rem;
        }
        .contact-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        .contact-header p {
            font-size: 1.2rem;
        }
        .contact-details {
            background-color: white;
            border-radius: 0.5rem;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
            text-align: center;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
        .contact-details h2 {
            color: #343a40;
            margin-bottom: 1rem;
        }
        .contact-details p {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }
        .contact-info i {
            color: #dc3545;
            margin-right: 0.5rem;
        }
        footer {
            margin-top: 3rem;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <div class="contact-header">
        <h1>Contáctanos</h1>
        <p>Si necesitas el programa o tienes algún problema, estamos aquí para ayudarte.</p>
    </div>

    <div class="contact-details">
        <h2>Detalles de Contacto</h2>
        <p><i class="fas fa-phone"></i>Teléfono: +54 343 5329910</p>
        <p><i class="fas fa-envelope"></i>Email: maxi.gartner@hotmail.com</p>
    </div>

    <div class="contact-info">
        <p>Este programa fue desarrollado con mucho cariño para los bomberos del cuartel de Crespo, Entre Ríos.</p>
        <p>La aplicación es gratuita y está disponible para cualquier cuartel de bomberos que la necesite.</p>
        <p>No dudes en contactarnos si tienes alguna duda o problema.</p>
    </div>

</div>

<?php include '../layouts/footer.php'; ?>