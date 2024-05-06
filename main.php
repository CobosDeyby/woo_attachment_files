<?php
/*
Plugin Name: Woo Attachment Files
Description: Enviar archivos adjuntos en los correos de Woocomerce.
Version: 1.0
Author: Alan Brito Delgado
License: GPL2
*/

// Función para adjuntar archivos a correos electrónicos
function adjuntar_archivos_a_correos($attachments, $email_id, $order, $email) {
    // Obtener la URL base del directorio de subida de WordPress
    $upload_dir = wp_upload_dir(); 

    // Obtener el estado de la orden
    $estado_orden = $order->get_status();

    // Definir los estados permitidos para adjuntar archivos
    $estados_permitidos = array('new_order', 'processing');

    // Comprobar si el estado actual está en el array de estados permitidos
    if (in_array($estado_orden, $estados_permitidos)) {
        foreach ($order->get_items() as $item_id => $item) {
            $metadatos_item = $item->get_meta_data();
            foreach ($metadatos_item as $meta) {
                if(strpos($meta->value, 'href')){
                    // Separar la cadena usando las comillas como delimitadores
                    $partes = explode(',', $meta->value);

                    foreach ($partes as $parte) {
                        $subpartes = explode('"', $parte);

                        // Filtrar la parte que contiene la URL
                        $url_archivo_adjunto = isset($subpartes[1]) ? $subpartes[1] : '';
                        $archivo_adjunto = str_replace($upload_dir['baseurl'], $upload_dir['basedir'], $url_archivo_adjunto);

                        // Verificar si el archivo existe y luego añadirlo a los adjuntos
                        if (file_exists($archivo_adjunto)) {
                            $attachments[] = $archivo_adjunto;
                        }
                    }
                }
            }
        }
    }

    // Devolver el array de archivos adjuntos
    return $attachments;
}

// Agregar el filtro para adjuntar archivos a correos electrónicos de WooCommerce
add_filter('woocommerce_email_attachments', 'adjuntar_archivos_a_correos', 10, 4);
