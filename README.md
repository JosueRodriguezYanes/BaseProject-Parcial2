<div align="center">
  <h1>🚀 BaseProject-Parcial2</h1>
</div>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

## 📋 Tabla de Contenidos
- [Configuración Inicial](#-configuración-inicial)
- [Requisitos Previos](#-requisitos-previos)
- [Instalación](#-instalación)
- [Estado del Servicio](#-estado-del-servicio)

## 🛠 Configuración Inicial

Para ejecutar este proyecto localmente, sigue estos pasos cuidadosamente.

### ⚡ Requisitos Previos

- PHP >= 8.0
- Composer
- MySQL
- Una base de datos MySQL creada para el proyecto

### 📥 Instalación

1. **Clonar el repositorio**
   ```bash
   git clone [url-del-repositorio]
   cd BaseProject-Parcial2
   ```

2. **Configurar el archivo .env**
   - Localiza el archivo `.env` en la raíz del proyecto
   - Busca la siguiente línea:
     ```env
     DB_PASSWORD=
     ```
   - Reemplaza el valor con tu contraseña de MySQL:
     ```env
     DB_PASSWORD=tu_contraseña
     ```

   > ⚠️ **Importante**: Asegúrate de que la base de datos esté creada y coincida con las especificaciones del proyecto.

3. **Instalar dependencias**
   ```bash
   composer install
   ```

4. **Generar clave de aplicación**
   ```bash
   php artisan key:generate
   ```

5. **Ejecutar migraciones**
   ```bash
   php artisan migrate
   ```

## 🔴 Estado del Servicio

### Conversor de Moneda

> ⚠️ **Aviso**: La funcionalidad de conversión de monedas está temporalmente deshabilitada debido a que el servicio SOAP proporcionado ha sido desactivado por la fuente oficial.

## 👥 Integrantes

| Nombre | Carnet |
|--------|---------|
| Alejandra Michelle Mejía Rivas | MR22035 |
| Josué Daniel Rodriguez Yanes | RY22001 |
| Ivan Eduardo Lopez Tobar | LT22009 |
| Christopher Alexis Velasquez Aguilar | VA22020 |
| Kelvin Antonio Velásquez Vásquez | VV22015 |
