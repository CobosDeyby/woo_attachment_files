# Adjuntar Archivos a Correos Electrónicos de WooCommerce

Este snipet para WordPress amplía la funcionalidad de WooCommerce al permitir adjuntar archivos a los correos electrónicos de las órdenes, en caso de que la orden contenga un archivo adjunto (no funciona como un input file sino que en si reconoce que viene un archivo, lo adjunta como archivo al correo).

## Descripción

Este snipet automatiza el proceso de adjuntar archivos a los correos electrónicos enviados por WooCommerce, facilitando la comunicación entre los administradores de la tienda y los clientes. Si un producto dentro de una orden tiene un archivo adjunto asociado, este snipet asegurará que el archivo se incluya como un adjunto en el correo electrónico, junto con el enlace del archivo.

## Funcionamiento

El snipet sigue los siguientes pasos para adjuntar archivos a los correos electrónicos:

1. **Configuración del archivo predeterminado**: Si se ha especificado un archivo predeterminado en la configuración del snipet, este archivo se adjuntará automáticamente a todos los correos electrónicos enviados por WooCommerce.

2. **Análisis de metadatos de los productos**: El snipet busca archivos adjuntos en los productos asociados a la orden. Examina los metadatos de los productos para encontrar cualquier enlace a archivos adjuntos.

3. **Adjuntar archivos encontrados**: Si se encuentran archivos adjuntos asociados a los productos de la orden, estos archivos se adjuntan al correo electrónico.

4. **Envío del correo electrónico**: Una vez que se han adjuntado todos los archivos pertinentes, el correo electrónico se envía con los archivos adjuntos.

## Instalación

1. Descarga el archivo ZIP de este repositorio.

2. Desde el panel de administración de WordPress, ve a "plugins" y haz clic en "Añadir nuevo".

3. Haz clic en "Subir snipet" y selecciona el archivo ZIP descargado.

4. Activa el snipet desde la página de plugins.

5. El snipet estará activo y funcionando. No se requiere ninguna configuración adicional.

O usa un plugin de Snipets si no quieres subirlo como plugin

## Contribuir

Si encuentras algún problema o deseas mejorar el snipet, siéntete libre de abrir un issue o enviar un pull request en el [repositorio de GitHub](https://github.com/CobosDeyby/woo_attachment_files).


## Licencia

Este snipet está licenciado bajo la [Licencia Pública General de GNU (GPL)](https://www.gnu.org/licenses/gpl-2.0.html), versión 2 o posterior. 
