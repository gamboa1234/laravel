<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordena tu comida favorita</title>

    <link rel="stylesheet" href="{{ asset('index.css') }}">
    
</head>

<body>
    <div class="contenedor">

        <header class="header">
            <div class="logo">
                <p>🍹 RESTAURANTE MOJITOS</p>

                <button id="btn-tema" class="btn-tema">
                    🌙 Modo Oscuro
                </button>
            
            </div>

            <nav class="menu">
                <ul class="navegacion">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="#">Menú</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                </ul>
            </nav>
            
        </header>

        <aside class="presentacion">
            <div class="informacion">
                <h1>Descubre nuestros platos</h1>

                <div>
                    <p>Nuestros deliciosos platos, preparados con ingredientes frescos y el mejor sabor.</p>
                    <p>Elige tus platos favoritos, arma tu pedido y coordina tu orden de manera fácil y rápida. ¡Disfruta del mejor sabor de Restaurante Mojitos!</p>
                </div>
            </div>

            <div class="presentacion--imagen">
                <img src="{{ asset('Imagenes/comi.png') }}" alt="Imagen de presentación">
            </div>
        </aside>

        <main class="comida">
            <h2 class="comida--titulo">LOS DELICIOSOS PLATOS</h2>

            <div class="platos">

                <article class="plato">
                    <h3>Hamburguesa de carne</h3>
                    <p>Nuestros deliciosos platos, preparados con ingredientes frescos y el mejor sabor.</p>

                    <div class="plato--info">
                        <p>25 Bs</p>
                    </div>
                </article>

                <article class="plato">
                    <h3>Pollo frito</h3>
                    <p>Nuestros deliciosos platos, preparados con ingredientes frescos y el mejor sabor.</p>

                    <div class="plato--info">
                        <p>30 Bs</p>
                    </div>
                </article>

                <article class="plato">
                    <h3>Papas fritas</h3>
                    <p>Nuestros deliciosos platos, preparados con ingredientes frescos y el mejor sabor.</p>

                    <div class="plato--info">
                        <p>40 Bs</p>
                    </div>
                </article>

                <article class="plato">
                    <h3>Hamburguesa</h3>
                    <p>Nuestros deliciosos platos, preparados con ingredientes frescos y el mejor sabor.</p>

                    <div class="plato--info">
                        <p>60 Bs</p>
                    </div>
                </article>

                <section id="contacto">

                    <h2>Contacto</h2>

                           @if(session('exito'))
                                <div class="mensaje-exito">
                                    ✅ {{ session('exito') }}
                                </div>
                            @endif

                        <form id="formulario-contacto" method="POST" action="/pedidos">
                            @csrf

                            <label for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellido" required>

                            <label for="correo">Correo electrónico</label>
                            <input type="email" id="correo" name="correo" placeholder="tunombre@correo.com" required>

                            <label for="pedido">Tu pedido</label>
                            <textarea id="pedido" name="pedido" rows="4" placeholder="Cuéntanos qué necesitas" required></textarea>

                            <button id="boton" type="submit">
                                Enviar pedido
                            </button>

                        </form>
                </section>

            </div>
            
        </main>

    </div>
     
    <footer>
        <p>Restaurante Mojitos</p>
    </footer>
    
    <script src="{{ asset('script.js') }}"></script>
    
</body>
</html>