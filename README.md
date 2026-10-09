# Lavandería Megarápido – Sistema de información

Sistema web para administrar los servicios, las facturas y los clientes de una lavandería. Fue mi **proyecto final del Técnico en Programación de Software del SENA (2022)**, desarrollado en equipo y modelado sobre los procesos de una lavandería real en funcionamiento.

## Funcionalidades

**Sitio público**
- Página de inicio, tarifas de servicios, "acerca de", ubicación y contacto.
- Registro de clientes, inicio de sesión y recuperación de contraseña.

**Panel del cliente**
- Consulta del catálogo de servicios y solicitud de servicio a domicilio (notificación por correo).
- Historial de facturas con su detalle.
- Edición de datos personales.

**Panel del administrador**
- CRUD de servicios: nombre, precio, peso, descripción e imagen.
- Generación de facturas con detalle de servicios, fechas de recibido y entrega y estado.
- Edición, cancelación y anulación de facturas, con listado de facturas eliminadas.
- Gestión de usuarios: crear, buscar, editar, desactivar y listar inactivos.

## Stack

- PHP (mysqli)
- MySQL
- HTML, CSS / SCSS y JavaScript

## Estructura

```
Administrador/
├── CRUD_Fact/     # Gestión de facturas
├── CRUD_Servi/    # Gestión de servicios
└── usuarios/      # Gestión de usuarios
Cliente/           # Panel del cliente
database/          # Script SQL de la base de datos
css/ scss/ js/ img/
index.php          # Página de inicio
conecta.php        # Conexión a la base de datos
```

## Modelo de datos

| Tabla | Descripción |
|---|---|
| `usuarios` | Clientes del sistema |
| `administrador` | Usuarios administradores |
| `servicios` | Catálogo de servicios con precio, peso e imagen |
| `factura` | Fechas de recibido y entrega, estado y cliente |
| `det_factura` | Servicios incluidos en cada factura |

## Instalación local

1. Importa `database/lavanderia_megarapido_3.sql` en MySQL.
2. Ajusta usuario y contraseña de la base de datos en `conecta.php`.
3. Copia el proyecto en la carpeta de tu servidor local (XAMPP o Laragon) y abre `index.php`.

## Limitaciones conocidas

Es un proyecto académico de 2022 y no está preparado para producción. Si lo retomara, haría estos cambios, que ya aplico en mis proyectos actuales ([finance-app](https://github.com/Ed4ard6/finance-app), [my-portfolio](https://github.com/Ed4ard6/my-portfolio)):

- Consultas preparadas (PDO) en lugar de concatenar variables en el SQL, para evitar inyección SQL.
- Contraseñas cifradas con `password_hash` / `password_verify`.
- Credenciales de la base de datos en un archivo `.env` fuera del repositorio.
- Estructura MVC para separar la lógica de las vistas.

## Equipo

Proyecto desarrollado en equipo como trabajo de grado del SENA.
Repositorio mantenido por **Eduardo Machacón** · [GitHub](https://github.com/Ed4ard6)
